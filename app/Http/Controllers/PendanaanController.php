<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PendanaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendanaan = DB::table('pendanaan')->get();
        return view('Pendanaan/pendanaan', ['pendanaan' => $pendanaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendanaan = DB::table('pendanaan')->insert([
            'TAHUN_PENDANAAN' => $request->tahun_pendanaan,
            'JUMLAH_PENDANAAN' => $request->jumlah_pendanaan,
            'TANGGAL_PENDANAAN' => $request->tanggal_pendanaan

        ]);
        return redirect('Pendanaan')->with('status2', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $pendanaan = DB::table('pendanaan')->where('ID_PENDANAAN', $request->id_pendanaan)->update([
            'TAHUN_PENDANAAN' => $request->tahun_pendanaan,
            'JUMLAH_PENDANAAN' => $request->jumlah_pendanaan,
            'TANGGAL_PENDANAAN' => $request->tanggal_pendanaan
        ]);
        return redirect('Pendanaan')->with('status3', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
