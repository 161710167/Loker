<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar_lowongan extends Model
{
    protected $fillable = ['nama','pendidikan','keahlian','telpon','cv'];
    public $timestamps = true;

    public function Lowongan(){
        return $this->hasone('App\Lowongan','id_lowongan');
    }
}

