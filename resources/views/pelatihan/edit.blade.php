@extends('layout')

@section('konten')
<style>
    body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h4 {
        font-size: 1.75rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    label {
        font-weight: bold;
        color: #555;
    }

    .form-control {
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn {
        padding: 10px 20px;
        font-size: 1.25rem;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-warning {
        background-color: #e6f700f8;
        border-color: #afce00;
        color: white;
    }

    .btn-warning:hover {
        background-color: #eeff03;
        transform: scale(1.05);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    form {
        display: flex;
        flex-direction: column;
    }
</style>
    
<h4 class="mt-5">Edit Jadwal</h4>

<form  action="{{ route('pelatihan.update', $pelatihan->id)}}" method="POST">
    @csrf
    <label>Nama Trainer</label>
    <input type="text" value="{{ $pelatihan->nama_trainer }}" name="nama_trainer" class="form-control mb-2">
    <label>Tanggal</label>
    <input type="date" value="{{ $pelatihan->tanggal }}" name="tanggal" class="form-control mb-2">

    <label>Waktu</label>
    <input type="time" value="{{ $pelatihan->waktu }}" name="waktu" class="form-control mb-2">
    <label>Topik</label>
    <input type="text" value="{{ $pelatihan->topik }}" name="topik" class="form-control mb-2">

    <button class="btn btn-warning">Edit</button>
    <a href="{{ url('/pelatihan')}}" class="btn btn-primary mt-2">Kembali</a>

</form>
@endsection