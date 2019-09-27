<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\berita;

class beritacontroller extends Controller
{
    function index(){
    	$berita=berita::all();

    return view('berita.index',compact ('berita'));
    }
}
