@extends('adminpage.layouts.main')

@section('content')
    <div class="container-fluid">
        <form class="user" method="POST" enctype="multipart/form-data" action="{{ url('adminpage/jadwal_dokter') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-3">Tambah Jadwal Dokter</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="waktu" name="waktu">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword" placeholder="Id Dokter"
                            name="id_dokter">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword" placeholder="Id Poliklinik"
                            name="id_poliklinik">
                    </div>
                    <div class="form-group"><button type="submit" class="btn btn-primary">Tambah</button></div>
                </div>
            </div>
        </form>
    </div>
@endsection
