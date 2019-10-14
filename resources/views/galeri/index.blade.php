@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Galeri</div>
                <div class="card-body">
                    
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Path</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">kategori_galeri_id</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $galeri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->keterangan !!}</td>
                        <td>{!! $item->path !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->kategori_galeri_id !!}</td>
                        <td>
                        <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-primary">Detail</a>
                        
                        <a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">Edit</a>
                        

                        {!! Form::open(['route'=>['galeri.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('yakin menghapus data ini?')"]); !!}

                        {!! Form::close() !!}
                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection