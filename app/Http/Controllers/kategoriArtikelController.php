<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\kategoriArtikel;

class kategoriArtikelController extends Controller
{
    function index(){
    	$kategoriArtikel=KategoriArtikel::all();

    return view('kategori_artikel.index',compact ('kategoriArtikel'));
    }
}
