<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bagian;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagian = Bagian::latest()->paginate(10);

        return view('bagian.index',compact('bagian'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('bagian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'bagian'=> 'required',

        ]);

        Bagian::create($request->all());
        return redirect()->route('bagian.index')
                        ->with('berhasil','datadisimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_bagian
     * @return \Illuminate\Http\Response
     */
    public function show(Bagian $id_bagian)
    {
        $bagian = Bagian::find($id_bagian);
        return view('bagian.show', compact('bagian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_bagian
     * @return \Illuminate\Http\Response
     */
    public function edit($id_bagian)
    {
        $bagian = Bagian::find($id_bagian);
        return view ('bagian.edit', compact('bagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_bagian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_bagian)
    {
         $request -> validate([
   
            'bagian' => 'required',
            
        ]);

        $bagian = Bagian::find($id_bagian)->update($request->all());

        return redirect()->route('bagian.index')
                        ->with('berhasil','data sudah disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_bagian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_bagian)
    {
         $bagian = Bagian::find($id_bagian)->delete();
        return redirect()->route('bagian.index')
                        ->with('berhasil','data sudah dihapus');
    }
}
