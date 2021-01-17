<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Complaint;

class VerifikasiController extends Controller
{
    public function index()
	{     
	    $beranda = Complaint::latest()->paginate(10);{}

        return view('beranda.index',compact('beranda'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
