<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    public function form(Request $request)
    {
        // Handle form submission
        echo $request->name;
        echo $request->email;
        echo $request->city;
    }
}
