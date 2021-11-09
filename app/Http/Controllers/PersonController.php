<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Robby Gustian";
    private $code = "190613011";
    public function index(){
        return view('person.index');
    }

    public function show($param){
        $this->name = $param;
        return $this->name;
    }

    public function sendData(){
        $code = $this->code;
        $name = $this->name;

        return view('person.sendData', compact('code','name'));
    }
}
