<?php

namespace App\Http\Controllers;

use App\artikel;
use Illuminate\Http\Request;
use App\kategoriArtikel;

class artikelcontroller extends controller
{
    public function index(){
        
        $artikel=artikel::all(); 

        return view ('artikel.index',compact('artikel'));
        //return view ('artikel.index'->with('data',$artikel);
    }

    public function show($id) {

        //$artikel=artikel::where('id',$id)->first();
        $artikel=artikel::find($id);

        return view ('artikel.show', compact('artikel'));
        
    }

    public function create(){

        $kategoriArtikel=kategoriArtikel::pluck('nama','id');
        
        return view('artikel.create', compact('kategoriArtikel'));
    }

    public function store(Request $request){

        $input= $request->all();

        artikel::create($input);

        return redirect(route('artikel.index'));
    }
}