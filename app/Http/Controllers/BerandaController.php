<?php

namespace App\Http\Controllers;
use App\complaint;

use Illuminate\Http\Request;

class BerandaController extends Controller

{
	public function index()
	{     
	    $beranda = Complaint::latest()->paginate(10);{}

        return view('beranda.index',compact('beranda'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
