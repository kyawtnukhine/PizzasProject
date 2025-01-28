<?php

namespace App\Http\Controllers;

use App\Models\pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index()
    {
        return view('index');
    }
    // function pizza() {
    //     // send data to blade file
    //     // return view('pizza',['data' =>"Kyawt Nu Khine"]);  pizza.blade.php <h1>{{$data}}</h1>

    // }
    function pizzas()
    {
        // Array of pizza data
        // $pizza = [
        //     ["id" => 1, "user_name" => "Aung Aung", "pizza_name" => "hot por", "topping" => "salad", "sauce" => "tomato", "price" => 100],
        //     ["id" => 2, "user_name" => "Kyaw", "pizza_name" => "hot por", "topping" => "salad", "sauce" => "tomato", "price" => 100],
        //     ["id" => 3, "user_name" => "Myat", "pizza_name" => "hot por", "topping" => "salad", "sauce" => "tomato", "price" => 100],
        //     ["id" => 4, "user_name" => "KNK", "pizza_name" => "hot por", "topping" => "salad", "sauce" => "tomato", "price" => 100],
        // ];
        // Pass the array to the view
        $pizza = pizza::all();       //pizza:: model name, default thet mat
        return view('pizza', ['pizzas' => $pizza]); //fist=blade, second=function, third= array$pizza
    }

    function insert(
        Request $request
      )
    {
        // return $request->toArray();
        //valiadation
        $validation = $request->validate([
            'userName' => 'required',
            'pizzaName' => 'required',
            'topping' => 'required',
            'sauce' => 'required',
            'price' => 'required',
        ]);
        if ($validation) {            //alocon model 
            // inseert data to darabase
            $pizza = new pizza();
            $pizza->user_name = $request->userName;   //first user_name is batabase pizzas in user_name //second userName is input name
            $pizza->pizza_name = $request->pizzaName;
            $pizza->topping = $request->topping;
            $pizza->Sauce = $request->sauce;
            $pizza->price = $request->price;
            $pizza->save();
            // return $pizza;
            return back()->with('success', 'Thank You For Your Order');
        } else {
            return back()->withError($validation);
        }
    }
    //delete data from database
    function delete($id)
    {
        // return $id;
        $delet_pizza_data = pizza::find($id);                    // return  $delet_pizza_data;
       
        $delet_pizza_data->delete();                              // return "deleted";
       
        
        return back()->with('delete', "$delet_pizza_data->user_name 's Order is deleted");
    }
}
