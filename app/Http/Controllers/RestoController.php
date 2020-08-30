<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestoController extends Controller
{
    function index() {
      return view('home');
    }

    function restoList() {
      $data = Restaurant::all();
      return view('list', ['data'=>$data]);
    }

    function add(Request $req) {
      $resto = new Restaurant();
      $resto->name = $req->name;
      $resto->email = $req->email;
      $resto->address = $req->address;
      $resto->save();
      return view('add');
    }
}
