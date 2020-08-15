<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Piece;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $pieces = [
            [1, 784914, "Chambre #1", "NORMAL", 0,"{\"id\":1,\"list_row\":\"tr_1\",\"plan_rect\":\"ch_1\",\"x\":-40,\"y\":111.5,\"width\":0,\"height\":0,\"isRect\":true,\"corners\":[{\"x\":-43,\"y\":133},{\"x\":-42,\"y\":197.5},{\"x\":-111.5,\"y\":197.5},{\"x\":-109,\"y\":133.5}]}","2019-05-09 15:39:44", "2019-05-09 15:41:12"],
             [2, 7431186, "Chambre #2", "NORMAL", 0,"{\"id\":2,\"list_row\":\"tr_2\",\"plan_rect\":\"ch_2\",\"x\":0,\"y\":0,\"width\":0,\"height\":0,\"isRect\":true,\"corners\":[{\"x\":-43.9,\"y\":198.5},{\"x\":-42.4,\"y\":260.6},{\"x\":-110,\"y\":258.6},{\"x\":-111,\"y\":200.6}]}","2019-05-09 15:39:44", "2019-05-09 15:41:24"],
            [3, 2371921, "Chambre #3", "NORMAL", 0, "{\"id\":3,\"list_row\":\"tr_3\",\"plan_rect\":\"ch_3\",\"x\":0,\"y\":0,\"width\":0,\"height\":0,\"isRect\":true,\"corners\":[{\"x\":-43,\"y\":260.6},{\"x\":-43,\"y\":304},{\"x\":-122.5,\"y\":304},{\"x\":-123,\"y\":260.2}]}", "2019-05-09 15:39:44", "2019-05-11 09:48:35"],
            [4, 8749823, "salle de bain", "NORMAL", 0, "{\"id\":4,\"list_row\":\"tr_4\",\"plan_rect\":\"salle_de_bain\",\"x\":0,\"y\":0,\"width\":0,\"height\":0,\"isRect\":true,\"corners\":[{\"x\":-42,\"y\":304.5},{\"x\":-41.9,\"y\":352},{\"x\":-141.4,\"y\":352.8},{\"x\":-142,\"y\":305.5}]}", "2019-05-09 15:39:45", "2019-05-09 15:41:33"],
            [5, 576156, "Séjour", "NORMAL", 0, "{\"id\":5,\"list_row\":\"tr_5\",\"plan_rect\":\"hall_1\",\"x\":0,\"y\":0,\"width\":0,\"height\":0,\"isRect\":true,\"corners\":[{\"x\":-114.5,\"y\":179.5},{\"x\":-113.5,\"y\":256.5},{\"x\":-124,\"y\":258.6},{\"x\":-124,\"y\":302},{\"x\":-178,\"y\":303},{\"x\":-179.5,\"y\":181.6}]}", "2019-05-09 15:39:45", "2019-05-09 15:41:50"],


            [6, 3544212, "Chambre #4", "NORMAL", 0, "{\"id\":6,\"list_row\":\"tr_6\",\"plan_rect\":\"ch_5\",\"x\":0,\"y\":0,\"width\":0,\"height\":0,\"isRect\":true,\"corners\":[{\"x\":-183.5,\"y\":197.5},{\"x\":-183,\"y\":304},{\"x\":-247,\"y\":305},{\"x\":-247,\"y\":198}]}", "2019-05-09 15:39:45", "2019-05-09 15:41:54"],

            [7, 3150427, "Chambre #5", "NORMAL", 0, "{\"id\":7,\"list_row\":\"tr_7\",\"plan_rect\":\"ch_5\",\"x\":0,\"y\":0,\"width\":0,\"height\":0,\"isRect\":true,\"corners\":[{\"x\":-182.9,\"y\":133},{\"x\":-181.9,\"y\":194.68},{\"x\":-247.5,\"y\":196.5},{\"x\":-247.5,\"y\":132.5}]}", "2019-05-09 15:39:45", "2019-05-09 15:41:57"]];
            foreach ($pieces as $room) {
            $piece = new Piece();

            $piece->cart_id = $room[1];
            $piece->name=$room[2];
            $piece->isInterdite = $room[4];
            $piece->data = $room[5];
            $piece->type = $room[3];
            $piece->save();
        }
    }
}
