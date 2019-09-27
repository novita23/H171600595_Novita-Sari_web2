<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table='kategori_pengumuman';

    protected $fillable = [
    	'judul', 'isi','users_id','kategori_pengumuman_id',
    ];
}
