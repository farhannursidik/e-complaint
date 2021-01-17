<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;

class AkunController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = Akun::latest()->paginate(10);

        return view('akun.index',compact('akun'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('akun.create');
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

            'username'=> 'required', 'password'=> 'required', 'role'=> 'required'

        ]);

        Akun::create($request->all());
        return redirect()->route('akun.index')
                        ->with('berhasil','datadisimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $id_akun)
    {
        $akun = Akun::find($id_akun);
        return view('akun.show', compact('akun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_akun
     * @return \Illuminate\Http\Response
     */
    public function edit($id_akun)
    {
        $akun = Akun::find($id_akun);
        return view ('akun.edit', compact('akun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_akun)
    {
         $request -> validate([
   
            'username'=> 'required', 'password'=> 'required', 'role'=> 'required'
            
        ]);

        $akun = Akun::find($id_akun)->update($request->all());

        return redirect()->route('akun.index')
                        ->with('berhasil','data sudah disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_akun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_akun)
    {
         $akun = Akun::find($id_akun)->delete();
        return redirect()->route('akun.index')
                        ->with('berhasil','data sudah dihapus');
    }
}

