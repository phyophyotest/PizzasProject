<?php

namespace App\Http\Controllers;

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
            return back()->with("success","Thank you for your order is success!");
       }else{
            return back($validate);
       }
    }
}
