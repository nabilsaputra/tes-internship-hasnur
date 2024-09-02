<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
    <title >Rekapitulasi</title>
    <style>
         body {
            font-family: Arial, sans-serif;
        }
        table {
            border: 2px solid #333;
            width: 100%;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        h1 {
            text-align: center;
            color: #4a4a4a;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        th {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Rekapitulasi</h1>
    <table class="table table-hover text-nowrap">
        <tr class="judul">
            <th>NO</th>
            <th>Nama Trainer</th>
            <th>Tanggal</th>
            <th>Sesi</th>
            <th>Waktu</th>
            <th>Topik</th>
        </tr>
        @foreach ($pelatihan as $no=>$item)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{$item->nama_trainer}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->sesi}}</td>
                <td>{{$item->waktu}}</td>
                <td>{{$item->topik}}</td>
                
            </tr>
        @endforeach
    </table>
</body>
</html>