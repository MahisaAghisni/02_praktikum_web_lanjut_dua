<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '<p>Nama : Mahisa Aghisni Fadhli</p>' . '<p>Nim : 2041720009</p>';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '. $id;
    }
}
