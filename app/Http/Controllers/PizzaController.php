<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{       
    function index () {
        return view('index');
    }
    function pizza () {
        return view('pizza');
    }
   function insert(
    Request $request
   ){
    // return $request->toArray();
    //valiadation
    $validation=$request->validate([
        'userName' => 'required',
        'pizzaName' => 'required',
        'topping' => 'required',
        'sauce' => 'required',
        'price' => 'required',
    ]);
       if($validation){
        return back()->with('success','Data Inserted Successfully');
       }
       else{
        return back()->withError($validation);
       }

    }
}

