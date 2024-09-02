@extends('layout')

@section('konten')
    
<div class="d-flex">
    <div class="ms-auto mt-5">
        <a class="btn btn-success mb-2" href="{{ route('pelatihan.tambah')}}">Tambah Jadwal</a>
    </div>
    
</div>

<table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>Nama Trainer</th>
                <th>Tanggal</th>
                <th>Sesi</th>
                <th>Waktu</th>
                <th>Topik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        @foreach ($pelatihan as $no=>$item)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{$item->nama_trainer}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->sesi}}</td>
                <td>{{$item->waktu}}</td>
                <td>{{$item->topik}}</td>
                <td>
                    <div style="display: flex; gap: 10px;">
                    <a href="{{ route('pelatihan.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('pelatihan.delete', $item->id)}}" method="post">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('pelatihan.tampil')}}?export=pdf" class="btn btn-danger mt-3">Export PDF</a> 
@endsection