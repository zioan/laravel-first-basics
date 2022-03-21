<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sample(){
        // echo "<h1>Test Controller</h1>";
        return view('sample-view', [
            "name" => "Zioan",
            "email" => "mail.test@gmail.com"
        ]);
    }
}
