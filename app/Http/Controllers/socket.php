<?php

namespace App\Http\Controllers;


//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class socket extends Controller{

    public function login(Request $request){

        //$method = Request::method();
        return view('login.login');
    }
}
?>
