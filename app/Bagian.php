<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bagian extends Model
{

    protected $table = 'bagian';
    protected $primaryKey = 'id_bagian';
    protected $fillable = ['id_bagian','bagian'];
    public 	  $timestamps = false;
}

?>