<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = ['nama_perusahaan','alamat','deskripsi'];
    public $timestamps = true;

    public function lowongan(){
        return $this->hasMany('App\Lowongan','id_perusahaan');
    
    }

}
