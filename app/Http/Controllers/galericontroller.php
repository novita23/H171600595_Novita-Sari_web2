<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\galeri;

class galericontroller extends Controller
{
    function index(){
    	$galeri=galeri::all();

    return view('galeri.index',compact ('galeri'));
    }
}
