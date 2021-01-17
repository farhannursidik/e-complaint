<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\Bagian;

class ComplaintController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaint = Complaint::latest()->paginate(10);

        return view('complaint.index',compact('complaint'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([

            'username'=> 'required', 'unitkerja'=> 'required', 'subjek'=> 'required', 'uraian'=> 'required', 'saransolusi'=> 'required', 'status'=> 'Belum Ditanggapi'


        ]);

        Complaint::create($request->all());
        return redirect()->route('verifikasi.index')
                        ->with('berhasil','datadisimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_complaint
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $id_complaint)
    {
        $complaint = Complaint::find($id_complaint);
        return view('complaint.show', compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_complaint
     * @return \Illuminate\Http\Response
     */
    public function edit($id_complaint)
    {
        $complaint = Complaint::find($id_complaint);
        return view ('complaint.edit', compact('complaint'));
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

        return redirect()->route('complaint.index')
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
        return redirect()->route('complaint.index')
                        ->with('berhasil','data sudah dihapus');
    }

    public function tampilbagian($id_bagian)
    {
        $data = Bagian::latest()->paginate(10);

        return view('bagian.index',compact('bagian'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
   

}
