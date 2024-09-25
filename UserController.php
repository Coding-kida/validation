<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){
        // echo "addUser function called";
        echo "<h1><mark>USER'S DETAILS</mark ></h1>";
        echo "NAME : $request->name</br>";
        echo "EMAIL : $request->email </br>";
        echo "CITY : $request->city </br>";
        echo "PHONE : $request->number</br>";
        echo "GENDER : $request->gender</br>";
        echo "AGE : $request->age</br>";
        // print_r($request->skills);

        $request->validate([
            'name'=>'required | min:3 | max:6 | uppercase',
            'email'=>'required | email',
            'city'=>'required',
            // 'phone'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'number'=>'required'
        ],[
            'name.required'=>'MESSAGE CHANGED',
            'name.uppercase'=>'The Name feild always will be in Uppercase'
            // 'email.email'=>'Email Should be in proper way'
        ]);

        // return $request;
    }
}
