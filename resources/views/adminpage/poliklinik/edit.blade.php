@extends('adminpage.layouts.main')

@section('content')
<div class="container-fluid">
    <form class="user" method="POST" enctype="multipart/form-data" action="{{ url('adminpage/poliklinik/'.$data->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-lg-6">
            <h3 class="mb-3">Edit Data Poliklinik</h3>
        <div class="form-group">
            <input type="text" class="form-control"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Nama" name="poli" value="{{ $data->poli }}">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="keterangan" id="validationTextarea" placeholder="Keterangan" required>{{ $data->keterangan }}</textarea>
        </div>
        <div class="form-group">
            <img id="output" src="{{ asset($data->poli_image) }}" width="100px" height="75px" class="img-preview img-thumbnail mt-2 mb-4"/>
            <input class="form-control-file" name="poli_image" type="file" id="image" accept="poli_image/*" onchange="previewImage()">
        </div>
        <div class="form-group"><button type="submit" class="btn btn-primary">Edit</button></div>
        </div>
        </div>
    </form>
</div>
<script>
function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        }
      }
  </script>
@endsection