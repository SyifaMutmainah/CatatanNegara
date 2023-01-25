<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanNegara;

class CatatanNegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data
        $datas = CatatanNegara::all();
        return view('catindex', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // menampilkan form tambah data
        return view('catcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // logic tambah data
        $store = CatatanNegara::create($request->all());

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // menampilkan data tertentu
        $datdir = CatatanNegara::find($id);

        return view('catshow', compact('datdir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // menampilkan form ubah data
        $datas = CatatanNegara::find($id);

        return view('catedit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // logic ubah data
        $datas = catatanNegara::find($id);
        
        // cara simple
        $datas->update($request->all());

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data
        $datas = CatatanNegara::find($id);
        $datas->delete();

        return redirect('home');
    }
}
