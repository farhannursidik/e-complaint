<?php

namespace App\Http\Controllers;
use App\Complaint;

use Illuminate\Http\Request;

class AccController extends Controller
{
   
    public function update(Request $request, $id_complaint)
    {
         $request -> validate([
   
             'status'=> 'required'
            
        ]);

        $complaint = Complaint::find($id_complaint)->update($request->all());

        return redirect()->route('complaint.index')
                        ->with('berhasil','data sudah disimpan');
    }

    
}
