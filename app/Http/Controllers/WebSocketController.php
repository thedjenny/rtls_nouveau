<?php /** @noinspection PhpComposerExtensionStubsInspection */

namespace App\Http\Controllers;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class WebSocketController extends Controller implements MessageComponentInterface
{
    protected $clients;
    private $mEventsController;
    ///
    private $subscriptions;
    private $persons;
    private $personresources;
    ///
    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
        $this->mEventsController = new EventsController();
        ////////////////////////

        $this->subscriptions = [];
        $this->persons = [];
        $this->personresources = [];

        ///////////////////
    }

    /**
     * When a new connection is opened it will be passed to this method
     * @param  ConnectionInterface $conn The socket/connection that just connected to your application
     * @throws \Exception
     */
    function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        //////////////
        $this->persons[$conn->resourceId] = $conn;
    }


    function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
    }


    function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "$e\n";
        $conn->close();
    }


    function getReversedUUID(String $uuid)
    {

        $espUUID = explode("-",$uuid);
        $strFinal = "";
        foreach($espUUID as $uuid){

            if(strlen($uuid)==12){
                $strDouze= str_split ($uuid,  4);
                $str1 = $strDouze[0];
                $str2=$strDouze[1].$strDouze[2];

                $str="" ;
                for($i=0;$i<strlen($str1)-1;$i = $i+2){
                    $str = $str1[$i].$str1[$i+1].$str;
                }
                $strFinal= $str ."-". $strFinal;

                $str="" ;
                for($i=0;$i<strlen($str2)-1;$i = $i+2){
                    $str = $str2[$i].$str2[$i+1].$str;
                }
                $strFinal= $str ."-". $strFinal;

            }
            else{
                $str="" ;
                for($i=0;$i<strlen($uuid)-1;$i = $i+2){
                    $str = $uuid[$i].$uuid[$i+1].$str;
                }
                if(strlen($strFinal)){
                    if(strlen($strFinal)==9){
                        $strFinal= $str .$strFinal;
                    }else{
                        $strFinal= $str ."-".$strFinal;
                    }

                }else{
                    $strFinal= "-".$str;
                }
            }
        }
        $i = 28;
        while($i<strlen($strFinal)-1){
            $strFinal[$i]=$strFinal[$i+1];
            $i++;
        }

        $strFinal = substr($strFinal, 0, -1);

        return $strFinal;
    }

    function onMessage(ConnectionInterface $conn, $msg)
    {
        $event = json_decode($msg);
        $event->data->iBeacon->uuid = $this->getReversedUUID($event->data->iBeacon->uuid);
        echo"\n my new UUID from onMessage : ".$event->data->iBeacon->uuid;
        $this->mEventsController->onNewEvent($event, function ($person, $roomId,$alert , $position) {
            $res = json_encode(["person" => $person,
                "room" => $roomId,
                "type"=>"position",
                "position" =>$position]);
            echo "\n on message code ".$res ."\n";
            foreach ($this->clients as $client) {
                $client->send($res);
                if ($alert != null) {
                    $client->send(
                        json_encode(
                            ["person" => $person,
                                "room" => $roomId,
                                "type"=>"alert"]));
                }
            }
        });
    }
}
