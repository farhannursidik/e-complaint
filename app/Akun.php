<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Akun extends Model
{

    protected $table = 'akun';
    protected $primaryKey = 'id_akun';
    protected $fillable = ['id_akun','username','password','role'];
    public 	  $timestamps = false;
}

?>