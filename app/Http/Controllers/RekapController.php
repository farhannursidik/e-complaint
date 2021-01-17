<?php

namespace App\Http\Controllers;
use App\complaint;

use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {     
        $rekap = Complaint::latest()->paginate(10);{}

        return view('rekap.index',compact('rekap'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
