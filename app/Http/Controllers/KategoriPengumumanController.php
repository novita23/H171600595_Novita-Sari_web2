<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        
        $KategoriPengumuman=KategoriPengumuman::all(); 

        return view ('kategori_pengumuman.index',compact('KategoriPengumuman'));
        //return view ('kategori_pengumuman.index'->with('data',$listKategoripengumuman);
    }

    public function show($id) {

        //$Kategoripengumuman=Kategoripengumuman::where('id',$id)->first();
        $KategoriPengumuman=KategoriPengumuman::find($id);

        return view ('kategori_pengumuman.show', compact('KategoriPengumuman'));
        
    }

    public function create(){

        return view ('kategori_gengumuman.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriGaleri::create($input);
        
        return redirect(route('kategori_pengumuman.index'));
    }
}
