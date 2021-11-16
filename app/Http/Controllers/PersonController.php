<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat artribut name
    private $code = "190313015";
    private $name   = "Mohamad Gifahri Addiansyah";

    //Membuat index
    public function index() {
        //Mengembalikan nilai artibut name
        return view("person.index");
    }
    
    public function show($param) {
        //Merubah Attribut name
        $this->name = $param;
        return $this->name;
    }
    public function sendData() {
        $code = $this->code;
        $name = $this->name;
    
        return view("person.sendData", compact('code', 'name'));
    } 
    public function add()
    {
        return view ('person.add');
    }
    public function addProcess(Request $request)
    {
        $this->validate($request,[
            'person_name' => 'required|max:30',
            'person_email' => 'required|email'
        ]);  

        return view('person.show',['data' => $request]);
    }
}