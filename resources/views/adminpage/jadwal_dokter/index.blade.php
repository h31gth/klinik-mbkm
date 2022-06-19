@extends('adminpage.layouts.main')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ url('adminpage/jadwal_dokter/create') }}">Tambah Jadwal Dokter</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <h3>Jadwal Dokter</h3>
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>ID_Dokter</th>
                                <th>ID_Poliklinik</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->waktu }}</td>
                                    <td>{{ $item->id_dokter }}</td>
                                    <td>{{ $item->id_poliklinik }}</td>
                                    <td>
                                        <a class="btn btn-warning ml-1"
                                            href="{{ url('adminpage/jadwal_dokter/' . $item->id . '/edit') }}"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ url('adminpage/jadwal_dokter/' . $item->id) }}" class="d-inline"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger ml-1 border-0 alert_notif"
                                                onclick="return confirm('Hapus Data ?')"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Page level plugins -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        @if (Session::has('message'))
            swal({
                title: "Success",
                text: "{{ session('message') }}",
                icon: "success",
            });
        @endif
    </script>
@endsection
