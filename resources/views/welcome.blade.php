<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Penjadwalan</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
    <style>
        body {
            background-color: whitesmoke;
            background-image: url(/images/HasnurBackground.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Black overlay with 50% opacity */
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            max-width: 600px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        a.btn-primary {
            padding: 10px 20px;
            font-size: 1.25rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            background-color: #007bff;
            color: white;
        }

        a.btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="content">
        <h1>Selamat Datang Di Aplikasi Penjadwalan Sesi Training HAFECS</h1>
        <a href="{{ route('pelatihan.tampil') }}" class="btn btn-primary">Klik disini untuk memulai</a>
    </div>
</body>
</html>
