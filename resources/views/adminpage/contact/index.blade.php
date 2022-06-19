@extends('adminpage.layouts.main')

@section('content')
    <h2>Hai!</h2>
    Anda menerima pesan dari : {{ $name }} <br><br>
    User detail: <br><br>
    Name: {{ $name }}<br>
    Email: {{ $email }}<br>
    No Telepon: {{ $phone }}<br>
    Tentang: {{ $subject }}<br>
    Pesan: {!! $subject !!}<br><br>

    Thanks
@endsection
