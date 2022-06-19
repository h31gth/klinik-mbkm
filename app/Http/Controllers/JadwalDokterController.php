<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal_dokter;
use Illuminate\Support\Facades\File;


class JadwalDokterController extends Controller
{
    //
    public function index()
    {
        $data = Jadwal_dokter::get();
        return view('adminpage.jadwal_dokter.index', compact('data'));
    }
    public function create()
    {
        return view('adminpage.jadwal_dokter.create');
    }
    public function store(Request $request)
    {
        $waktu = $request->waktu;
        $dokter = $request->id_dokter;
        $poliklinik = $request->id_poliklinik;

        

        Jadwal_dokter::create([
            'waktu' => $waktu,
            'id_dokter' => $dokter,
            'id_poliklinik' => $poliklinik,
            
   
        ]);
        return redirect('adminpage/jadwal_dokter')->with('message','Data Berhasil Di Tambahkan');
    }
    public function edit($id)
    {
        $data = Jadwal_dokter::findOrFail($id);
        return view('adminpage.jadwal_dokter.edit',compact('data'));
    }
    public function show($id)
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
    public function update(Request $request, $id)
    {
        //
        $waktu = Jadwal_dokter::findOrfail($id);
        $jadwal_dokter = $request->id_dokter;
        $poliklinik = $request->id_poliklinik;
    
            $jadwal_dokter->update([
            'waktu' => $waktu,
            'id_dokter' => $jadwal_dokter,
            'id_poliklinik' => $poliklinik,
            
            ]);
            return redirect('adminpage/jadwal_dokter')->with('message', 'Data Berhasil Di Update');
        

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
        $data = Jadwal_dokter::findOrFail($id);
        $data->delete();
        return redirect('adminpage/jadwal_dokter')->with('message', 'Data Berhasil Di Hapus');
    }

    
    public function tampiljadwal()
    {
        $data = Jadwal_dokter::get();
        return view('adminpage.jadwal_dokter.index', compact('data'));
    }

    public function tampiljadwaldokter()
    {
        $data = Jadwal_dokter::get();
        return view('landingpage.jadwal_dokter.index', compact('data'));
    }
}