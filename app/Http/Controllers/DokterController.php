<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\File;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dokter::orderBy('id', 'desc')->get();
        return view('adminpage.dokter.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $no_hp = $request->HP;
        $alamat = $request->alamat;
        $jk = $request->jk;
        $image = $request->file('image');
        $nama_photo = date('YmdHis').$image->getClientOriginalName();
        $image->move('images/dokter', $nama_photo);
        $photo = 'images/dokter/' . $nama_photo;

        Dokter::create([
            'name' => $name,
            'HP' => $no_hp,
            'alamat' => $alamat,
            'jk' => $jk,
            'image' => $photo
        ]);

        return redirect('adminpage/dokter')->with('message','Data Berhasil Di Tambahkan');
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
        $data = Dokter::findOrFail($id);
        return view('adminpage.dokter.edit',compact('data'));
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
                $dokter = Dokter::findOrFail($id);
                $name = $request->name;
                $no_hp = $request->HP;
                $alamat = $request->alamat;
                $jk = $request->jk;
                $image = $request->file('image');
        
                if ($image == "") {
                    $dokter->update([
                        'name' => $name,
                        'HP' => $no_hp,
                        'alamat' => $alamat,
                        'jk' => $jk
                    ]);
                    return redirect('adminpage/dokter')->with('message', 'Data Berhasil Di Update');
                }else{
                    File::delete(public_path($dokter->image));
                    $nama_photo = date('YmdHis') . $image->getClientOriginalName();
                    $image->move('images/dokter', $nama_photo);
                    $photo = 'images/dokter/' . $nama_photo;
        
                    $dokter->update([
                        'name' => $name,
                        'HP' => $no_hp,
                        'alamat' => $alamat,
                        'jk' => $jk,
                        'image' => $photo
                    ]);
                    return redirect('adminpage/dokter')->with('message', 'Data Berhasil Di Update');
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
        $data = Dokter::findOrFail($id);
            File::delete(public_path($data->image));
            $data->delete();
            return redirect('adminpage/dokter')->with('message', 'Data Berhasil Di Hapus');
    }

    public function tampil()
    {
        $data = Dokter::get();
        return view('adminpage.dokter.index', compact('data'));
    }

    public function tampillanding()
    {
        $data = Dokter::get();
        return view('landingpage.dokter.index', compact('data'));
    }
}