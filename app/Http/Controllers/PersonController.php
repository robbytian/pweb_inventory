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
    
    public function add(){
        return view('person.add');
    }

    public function addProcess(Request $request){
        $this->validate($request,[
            'person_name' =>'required|max:30',
            'person_email'=>'required|email'
        ]);

        return view('person.show',['data'=>$request]);
       
    }
}
