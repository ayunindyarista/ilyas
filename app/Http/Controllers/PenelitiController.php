<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenelitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peneliti = DB::table('peneliti')->get();
        $fakultas=DB::table('fakultas')->get();
        return view('Peneliti/peneliti', ['peneliti' => $peneliti, 'fakultas'=>$fakultas]);
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
        $peneliti = DB::table('peneliti')->insert([
            'NAMA_PENELITI' => $request->nama_peneliti,
            'ID_FAKULTAS' => $request->Fakultas,
            'NIDN_PENELITI' => $request->nidn_peneliti,
            'TANGGAL_PENELITI' => $request->tanggal_peneliti

        ]);
        return redirect('Peneliti')->with('status2', 'Data Berhasil Di Tambahkan');
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
        $peneliti = DB::table('peneliti')->where('ID_PENELITI', $request->id_peneliti)->update([
            'NAMA_PENELITI' => $request->nama_peneliti,
            'NIDN_PENELITI' => $request->nidn_peneliti,
            'STATUS_PENELITI' => $request->status_peneliti,
            'TANGGAL_PENELITI' => $request->tanggal_peneliti
        ]);
        return redirect('Peneliti')->with('status3', 'Data Berhasil Di Edit');
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
