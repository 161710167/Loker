<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = ['nama_lowongan'];
    public $timestamps = true;

    public function Perusahaan(){
        return $this->BelongsTo('App\Perusahaan','id_perusahaan');
    }
}