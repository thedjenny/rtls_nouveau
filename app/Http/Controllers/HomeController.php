<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rooms = Piece::all();
        $admin = Admin::find(1);
        $name = $admin->firstname;



        return view('home.home')->with(['rooms'=> $rooms,
                                             'name'=>$name]);
    }

    public function map(){

        $rooms = Piece::all();

        return view('users.map')->with('rooms', $rooms);
    }

    public function test(){

    }
}
