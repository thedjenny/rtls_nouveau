<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piece;

class UsersController extends Controller
{
    public function index(Request $request){

        
        $rooms = Piece::all();
        
        return view('home.home')->with('rooms',$rooms);
    }
}
