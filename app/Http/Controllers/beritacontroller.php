<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use App\KategoriBerita;

class beritacontroller extends Controller
{
    function index(){
    	$berita=berita::all();

    return view('berita.index',compact ('berita'));
    }

    public function show($id) {

        //$artikel=artikel::where('id',$id)->first();
        $berita=berita::find($id);

        return view ('berita.show', compact('berita'));
        
    }

    public function create(){

        $KategoriBerita=KategoriBerita::pluck('nama','id');
        
        return view('berita.create', compact('KategoriBerita'));
    }

    public function store(Request $request){

        $input= $request->all();

        berita::create($input);

        return redirect(route('berita.index'));
    }
}
