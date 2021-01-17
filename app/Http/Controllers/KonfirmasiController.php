<?php

namespace App\Http\Controllers;
use App\Complaint;

use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
  	 public function index()
    {
        $complaint = Complaint::latest()->paginate(10);

        return view('konfirmasi.index',compact('complaint'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_complaint
     * @return \Illuminate\Http\Response
     */
    public function konfirmasi($id_complaint)
    {
        $complaint = Complaint::find($id_complaint);
        return view ('konfirmasi.edit', compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_complaint)
    {
         $request -> validate([
   
             'status'=> 'required'
            
        ]);

        $complaint = Complaint::find($id_complaint)->update($request->all());

        return redirect()->route('konfirmasi.index')
                        ->with('berhasil','data sudah disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_complaint)
    {
         $complaint = Complaint::find($id_complaint)->delete();
        return redirect()->route('konfirmasi.index')
                        ->with('berhasil','data sudah dihapus');
    }
}
