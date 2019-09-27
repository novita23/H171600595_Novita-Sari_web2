<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\kategoriBerita;

class KategoriBeritaController extends Controller
{
    function index(){
    	$KategoriBerita=KategoriBerita::all();

    return view('kategori_berita.index',compact ('KategoriBerita'));
    }
}
