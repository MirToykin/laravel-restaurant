<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Session;

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
      $req->session()->flash('status', 'Restaurant has been successfully added!');
      return redirect('list');
    }

    function delete($id) {
      Restaurant::find($id)->delete();
      Session::flash('status', 'Restaurant has been successfully deleted!');
      return redirect('list');
    }

    function edit($id) {
      $data = Restaurant::find($id);
      return view('edit', ['data'=>$data]);
    }

  function update(Request $req) {
    $resto =  Restaurant::find($req->id);
    $resto->name = $req->name;
    $resto->email = $req->email;
    $resto->address = $req->address;
    $resto->save();
    $req->session()->flash('status', 'Restaurant has been successfully updated!');
    return redirect('list');
  }
}
