<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PoliklinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Poliklinik::orderBy('id', 'desc')->get();
        return view('adminpage.poliklinik.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.poliklinik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poli = $request->poli;
        $keterangan = $request->keterangan;
        $image = $request->file('poli_image');
        $nama_photo = date('YmdHis') . $image->getClientOriginalName();
        $image->move('images/poliklinik', $nama_photo);
        $photo = 'images/poliklinik/' . $nama_photo;

        Poliklinik::create([
            'poli' => $poli,
            'keterangan' => $keterangan,
            'poli_image' => $photo
        ]);

        return redirect('adminpage/poliklinik')->with('message', 'Data Berhasil Di Tambahkan');
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
        $data = Poliklinik::findOrFail($id);
        return view('adminpage.poliklinik.edit', compact('data'));
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
        $poliklinik = Poliklinik::findOrFail($id);
        $poli = $request->poli;
        $keterangan = $request->keterangan;
        $image = $request->file('poli_image');

        if ($image == "") {
            $poliklinik->update([
                'poli' => $poli,
                'keterangan' => $keterangan,
            ]);
            return redirect('adminpage/poliklinik')->with('message', 'Data Berhasil Di Update');
        } else {
            File::delete(public_path($poliklinik->image));
            $nama_photo = date('YmdHis') . $image->getClientOriginalName();
            $image->move('images/poliklinik', $nama_photo);
            $photo = 'images/poliklinik/' . $nama_photo;

            $poliklinik->update([
                'poli' => $poli,
                'keterangan' => $keterangan,
                'poli_image' => $photo
            ]);
            return redirect('adminpage/poliklinik')->with('message', 'Data Berhasil Di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Poliklinik::findOrFail($id);
        File::delete(public_path($data->poli_image));
        $data->delete();
        return redirect('adminpage/poliklinik')->with('message', 'Data Berhasil Di Hapus');
    }

    public function tampil()
    {
        $data = Poliklinik::get();
        return view('adminpage.poliklinik.index', compact('data'));
    }

    public function tampildokter(Poliklinik $poliklinik)
    {
        return view(
            'landingpage.poliklinik.konten',
            [
                'data' => $poliklinik->dokter,
                'keterangan' => $poliklinik->keterangan,
                'poli_image' => $poliklinik->poli_image
            ]
        );
    }

    public function tampillanding()
    {
        $data = Poliklinik::get();
        return view('landingpage.poliklinik', compact('data'));
    }
}
