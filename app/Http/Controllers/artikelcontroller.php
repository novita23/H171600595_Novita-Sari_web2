<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\artikel;

class artikelcontroller extends Controller
{
    function index(){
    	$artikel=artikel::all();

    return view('artikel.index',compact ('artikel'));
    }
}
