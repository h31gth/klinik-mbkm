@extends('adminpage.layouts.main')

@section('content')
<div class="container-fluid">
    <form class="user" method="POST" enctype="multipart/form-data" action="{{ url('adminpage/jadwal_dokter/'.$data->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-lg-6">
            <h3 class="mb-3">Edit Jadwal Dokter</h3>
        <div class="form-group">
            <input type="text" class="form-control"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Nama" name="name" value="{{ $data->no }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"
                id="exampleInputPassword" placeholder="No Hp" name="HP" value="{{ $data->waktu }}">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="dokter" id="validationTextarea" placeholder="Dokter" required>{{ $data->dokter }}</textarea>
        </div>
        @if ($data->poliklinik == "paru-paru")
            <div class="form-check">
           <input class="form-check-input" checked type="radio" name="poliklinik" value="paru-paru" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Paru-paru
            </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="poliklinik" value="Jantung" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Jantung
                </label>
            </div>
            @else
            <div class="form-check">
            <input class="form-check-input"  type="radio" name="poliklinik" value="paru-paru"
                                            id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                                            Paru-paru
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" checked type="radio" name="jk" value="Jantung"
                                            id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            Jantung
            </label>
            </div>
            @endif
        <div class="form-group">
            <img id="output" src="{{ asset($data->image) }}" width="100px" height="75px" class="img-preview img-thumbnail mt-2 mb-4"/>
            <input class="form-control-file" name="image" type="file" id="image" accept="image/*" onchange="previewImage()">
        </div>
        <div class="form-group"><button type="submit" class="btn btn-primary">Edit</button></div>
        </div>
        </div>
    </form>
</div>

@endsection