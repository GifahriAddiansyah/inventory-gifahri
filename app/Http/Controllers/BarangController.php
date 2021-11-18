<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    private $item = [
        "code"=>"B001",
        "nama"=>"Buku",
        "harga"=>"RP 2.000",
        "stok"=>"100",
    ],
    [
        "code"=>"B001",
        "nama"=>"Buku",
        "harga"=>"RP 2.000",
        "stok"=>"100",
    ]
    [,
        "code"=>"B001",
        "nama"=>"Buku",
        "harga"=>"RP 2.000",
        "stok"=>"100",
    ]
    [,
        "code"=>"B0001",
        "nama"=>"Buku",
        "harga"=>"RP 2.000",
        "stok"=>"100",
    ]
    //membuat barang index
    public function index() {
        return view("barang.index");
    }
    public function input(){
        return view("barang.input");
    }
    public function transaksi(){
        return view("barang.transaksi");
    }
    public function data(){
        return view("barang.data");
    }
    public function pp($kode, $nama, $harga, $stok,){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        return view("barang.pp");
    }
}

