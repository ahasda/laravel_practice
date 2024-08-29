<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TestController extends Controller
{
    //
    public function index(){
        $name = "Aniket";
        // return view("test",["name"=>$name]);
        return view("welcome",compact('name'));
    }


}
