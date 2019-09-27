<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    function index(){
    	$KategoriPengumuman=KategoriPengumuman::all();

    return view('kategori_pengumuman.index',compact ('KategoriPengumuman'));
    }
}
