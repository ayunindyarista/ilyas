<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LuaranwajibController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $luaranwajib = DB::table('luaran_wajib')->get();
        return view('Luaran_wajib/luaranwajib', ['luaran_wajib' => $luaranwajib]);
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
        $luaranwajib = DB::table('luaran_wajib')->insert([
            'LUARAN_WAJIB' => $request->luaran_wajib,
            'TAHUN_LUARAN_WAJIB' => $request->tahun_luaran_wajib,
            'TANGGAL_LUARAN_WAJIB' => $request->tanggal_luaran_wajib

        ]);
        return redirect('Luaranwajib')->with('status2', 'Data Berhasil Di Tambahkan');
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
        $luaranwajib = DB::table('luaran_wajib')->where('ID_LUARAN_WAJIB', $request->id_luaran_wajib)->update([
            'LUARAN_WAJIB' => $request->luaran_wajib,
            'TAHUN_LUARAN_WAJIB' => $request->tahun_luaran_wajib,
            'TANGGAL_LUARAN_WAJIB' => $request->tanggal_luaran_wajib

        ]);
        return redirect('Luaranwajib')->with('status3', 'Data Berhasil Di Edit');
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
