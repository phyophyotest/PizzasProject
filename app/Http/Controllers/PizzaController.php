<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index(){
        return view('index');
    }
    function pizzas() {
        return view('pizzas');
    }
    function insert(Request $res){
      $validate= $res->validate([
           "username"=>"required",
           "pizza_name"=>"required",
           "topping"=>"required",
           "sauce"=>"required",
           "price"=>"required",
       ]);
       if($validate){
           $pizzas=new Pizza();
           $pizzas->username=$res->username;
           $pizzas->pizza_name=$res->pizza_name;
           $pizzas->topping=$res->topping;
           $pizzas->sauce=$res->sauce;
           $pizzas->price=$res->price;
           $pizzas->save();
            return back()->with("success","Thank you for your order is success!");
       }else{
            return back()->withErrors($validate);
       }
    }
}
