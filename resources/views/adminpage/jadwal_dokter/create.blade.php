@extends('adminpage.layouts.main')

@section('content')
<div class="container-fluid">
    <form class="user" method="POST" enctype="multipart/form-data" action="{{ url('adminpage/jadwal_dokter') }}">
        @csrf
        <div class="row">
        <div class="col-lg-6">
            <h3 class="mb-3">Tambah Jadwal Dokter</h3>
        <div class="form-group">
            <input type="text" class="form-control"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="waktu" name="waktu">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"
                id="exampleInputPassword" placeholder="Dokter" name="dokter">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">Poliklinik</label><br>
                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" name="poliklinik" value="poliklinik"
                        id="flexRadioDefault1">
                    <label class="form-check-label mr-4" for="flexRadioDefault1">
                        Paru-paru
                    </label>
                </div>
                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" name="poliklinik" value="jantung"
                        id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Jantung
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <img width="100px" height="75px" class="img-preview img-thumbnail mt-2 mb-4"/>
            <input class="form-control-file" id="image" name="image" type="file" onchange="previewImage()">
        </div>
        <div class="form-group"><button type="submit" class="btn btn-primary">Tambah</button></div>
        </div>
        </div>
    </form>
</div>

@endsection