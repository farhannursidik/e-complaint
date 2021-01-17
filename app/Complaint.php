<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = 'complaint';
    protected $primaryKey = 'id_complaint';
    protected $fillable = ['id_complaint','username','unitkerja','subjek','uraian','saransolusi','status'];
    public 	  $timestamps = false;
}
