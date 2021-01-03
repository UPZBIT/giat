<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class GeneralController extends Controller{


    public function index(){
        return view("welcome");
    }

    public function show($r){
        echo "<pre>";
        print_r($r);
        echo "</pre>";
    }

    public function test(){
        $response = Http::get('http://test.com');
        $this->show($response);
    }

    public function crypt(){
        $c = Crypt::encryptString("emre");

        return Crypt::decryptString($c);
    }

    public function hash(){
        $h = Hash::make("emre");
        $info = Hash::info($h);
        $check = Hash::check("emre",$h);
        $arr = ["Hash" => $h, "Info" => $info, "Check" => $check];

        $this->show($arr);
    }
}
