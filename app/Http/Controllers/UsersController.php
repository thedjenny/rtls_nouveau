<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piece;

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

        return view('users.map')->with([
            'rooms'=> $rooms,
            'userid'=> $id,
            ]);
    }
}
