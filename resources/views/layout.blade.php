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
            background-image: url(/images/HasnurLogo.png);
            background-size: 20%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top right;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    
        h1 {
            color: #333;
            font-size: 2.5rem;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 40px;
        }
    
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
    
        .btn-primary, .btn-success {
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
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
    
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
    
        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
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
    
        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            display: block;
        }
    
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
    
            h1 {
                font-size: 2rem;
                margin-bottom: 30px;
            }
        }
    </style>
    
</head>
<body>
    <h1 class="text-center mt-5">Penjadwalan Sesi Training HAFECS</h1>

    <div class="mt-3 container">
        @yield('konten')
        
    </div>
</body>

</html>