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

    public function edit($id)
    {
        $Berita=Berita::find($id);
    	$KategoriBerita=KategoriBerita::pluck('nama','id');

        if (empty($Berita))
        { return redirect(route('berita.index')); }

        return view( 'berita.edit',compact( 'Berita','KategoriBerita'));
    }

    public function update($id,Request $request)
    {
    
    	$berita=Berita::find($id);
        $input= $request->all();

        if (empty($berita))
        { return redirect(route('berita.index')); }

        $berita->update($input);
        return redirect(route('berita.index'));
        
    }

    public function destroy($id)
    {
    
    	$berita=Berita::find($id);

        if (empty($berita))
        { return redirect(route('berita.index')); }

        $berita->delete();
        return redirect(route('berita.index'));
    }

  public function trash()
    {
        $Berita=Berita::onlyTrashed()
        ->whereNotNull('deleted_at')
        ->get();
        
        return view('berita.index',compact('Berita'));
    }

}
