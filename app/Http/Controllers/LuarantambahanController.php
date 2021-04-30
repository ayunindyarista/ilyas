<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LuarantambahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $luarantambahan = DB::table('luaran_tambahan')->get();
        return view('Luaran_tambahan/luarantambahan', ['luaran_tambahan' => $luarantambahan]);
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
        $luarantambahan = DB::table('luaran_tambahan')->insert([
            'LUARAN_TAMBAHAN' => $request->luaran_tambahan,
            'TAHUN_LUARAN_TAMBAHAN' => $request->tahun_luaran_tambahan,
            'TANGGAL_LUARAN_TAMBAHAN' => $request->tanggal_luaran_tambahan

        ]);
        return redirect('Luarantambahan')->with('status2', 'Data Berhasil Di Tambahkan');
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
        $luarantambahan = DB::table('luaran_tambahan')->where('ID_LUARAN_TAMBAHAN', $request->id_luaran_tambahan)->update([
            'LUARAN_TAMBAHAN' => $request->luaran_tambahan,
            'TAHUN_LUARAN_TAMBAHAN' => $request->tahun_luaran_tambahan,
            'TANGGAL_LUARAN_TAMBAHAN' => $request->tanggal_luaran_tambahan

        ]);
        return redirect('Luarantambahan')->with('status3', 'Data Berhasil Di Edit');
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
