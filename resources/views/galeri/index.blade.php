@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
             
<body>
		<table border="1">

		<tittle>Galeri</tittle>
			<tr>
				<td>Id</td>
				<td>Nama</td>
				<td>Keterangan</td>
				<td>Users id</td>
				<td>Kategori_galeri_id</td>

              </div>
             </div>
            </div>


		

			</tr>
		@foreach($galeri as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->keterangan !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_galeri_id !!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection