<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phone;
use App\Models\User;

class usercontroller extends Controller
{
    public function Create_Phone(Request $request){
        phone::create($request->all());
    }

    public function getuser($id){
        return phone::find($id)->user;
    }

    public function getphone($id){
        return user::find($id)->phone;
    }

}
