<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piece;
use App\Models\Person;

class UsersController extends Controller
{

    /**
     * UsersController constructor.
     */
    public function __construct()
    {
    }

    public function index(Request $request){


        $rooms = Piece::all();

        return view('home.home')->with('rooms',$rooms);
    }



    public function map($id){

        $rooms = Piece::all();
        $person = Person::find($id);
        $img = $person->profile_picture;
        if($person != null){
        return view('users.map')->with([
            'rooms'=> $rooms,
            'userid'=> $id,
            'userimg'=>$img
            ]);
        }else{
            return view('/users/404');
        }
    }
}
