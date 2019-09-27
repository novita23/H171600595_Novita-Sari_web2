<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='kategori_galeri';

    protected $fillable = [
    	'judul', 'isi','users_id','kategori_galeri_id',
    ];
}
