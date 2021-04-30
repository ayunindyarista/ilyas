<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenelitianController extends Controller
{
    public function index()
    {
        // $penelitian = DB::table('penelitian')->get();
        $penelitian = DB::table('penelitian')->join('detail_penelitian','penelitian.ID_PENELITIAN','=','detail_penelitian.ID_PENELITIAN')
                                             ->join('peneliti','detail_penelitian.ID_PENELITI','=','peneliti.ID_PENELITI')
                                             ->join('luaran_tambahan', 'penelitian.ID_LUARAN_TAMBAHAN', '=', 'luaran_tambahan.ID_LUARAN_TAMBAHAN')
                                             ->join('luaran_wajib', 'penelitian.ID_LUARAN_WAJIB', '=', 'luaran_wajib.ID_LUARAN_WAJIB')
                                             ->join('pendanaan', 'penelitian.ID_PENDANAAN', '=', 'pendanaan.ID_PENDANAAN')
                                             ->get();
        $fakultas=DB::table('fakultas')->get();
        $peneliti=DB::table('peneliti')->get();
        $luarantambahan=DB::table('luaran_tambahan')->get();
        $luaranwajib=DB::table('luaran_wajib')->get();
        $dana=DB::table('pendanaan')->get();
        //  dump($penelitian);
        return view('Penelitian/penelitian', ['penelitian' => $penelitian,'fakultas'=>$fakultas, 'peneliti'=>$peneliti, 'luaran_tambahan'=>$luarantambahan, 'luaran_wajib'=>$luaranwajib, 'pendanaan'=>$dana]);
    }

    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('penelitian')->insert([
            'ID_LUARAN_TAMBAHAN' => $request->ltambahan,
            'ID_LUARAN_WAJIB' => $request->lwajib,
            'ID_PENDANAAN' => $request->dana,    
            'JUDUL_PENELITIAN' => $request->judul_penelitian,
            'SKEMA' => $request->skema,
            'BIDANG_FOKUS' => $request->bidang_fokus,
            'PROGRAM' => $request->program,
            'TAHUN_KEGIATAN' => $request->th_kegiatan,
            'LAMA_PENELITIAN' => $request->lama_penelitian,
            'TANGGAL_PENGAJUAN' => $request->tgl,
            
        ]);
        $id_penelitian = DB::table('penelitian')->max('ID_PENELITIAN');
        DB::table('detail_penelitian')->insert([
            'ID_PENELITIAN' => $id_penelitian,
            'ID_PENELITI' => $request->ID_pen   
        ]);
        
        // alihkan halaman ke halaman pegawai
        return redirect('/Penelitian');
    }

    public function edit(Request $request, $id)
    {
        DB::table('penelitian')->where('ID_PENELITIAN', $id)->update([
            'ID_LUARAN_TAMBAHAN' => $request->ltambahan,
            'ID_LUARAN_WAJIB' => $request->lwajib,
            'ID_PENDANAAN' => $request->dana,    
            'JUDUL_PENELITIAN' => $request->judul_penelitian,
            'SKEMA' => $request->skema,
            'BIDANG_FOKUS' => $request->bidang_fokus,
            'PROGRAM' => $request->program,
            'TAHUN_KEGIATAN' => $request->th_kegiatan,
            'LAMA_PENELITIAN' => $request->lama_penelitian,
        ]);
        return back();
    }
}
