<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeneralController extends Controller{

    public function index(){
        return view("welcome");
    }

    public function test(){
        $response = Http::get('http://test.com');
        echo "<pre>";
        var_dump($response);
        echo "</pre>";
    }
}
