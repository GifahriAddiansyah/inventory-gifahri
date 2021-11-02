<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat artribut name
    private $name = " Mohamad Gifahri";

    //Membuat index
    public function index() {
        //Mengembalikan nilai artibut name
        return $this->name;
    }
    
    public function show($param) {
        //Merubah Attribut name
        $this->name = $param;
        return $this->name;
    }
}


