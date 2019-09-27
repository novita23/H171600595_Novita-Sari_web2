<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table='kategori_berita';

    protected $fillable = [
    	'judul', 'isi','users_id','kategori_berita_id',
    ];
}
