<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\pengumuman;
class pengumumancontroller extends Controller
{
    function index(){
    	$pengumuman=pengumuman::all();

    return view('pengumuman.index',compact ('pengumuman'));
    }
}
