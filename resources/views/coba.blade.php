@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        nav{
            background-color:black;
        }
    </style>

   
</head>

</html>

@section('container')
<body>


{{-- 
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="assets/img/ealain.png">
                <p>Ealain</p>
            </div>
            <nav>
                <ul>
                    <li><a href="../Home Page/home.html">Home</a></li>
                    <li><a href="../Explore/explore.html">Explore</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </nav>
        </div>
    </div> --}}

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
   
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2 img" style="width: 450px;">
                    <img src="../assets/img/Group 5.png">
                </div>
                
                
                <div class="col-2">
                    <div class="login-container">
                        <h2>Login</h2>
                        <form action="/login" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email Adress" id="email" required>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <div class="forgot">
                                <a href="" style="text-decoration:none;">Forgot Password</a>
                            </div>
                            {{-- <button type="submit" class="btn">Login</button> --}}
                            <button class="w-100 btn btn-lg"
                            style="background-color:#f44336; color:white; border-radius:10px;
                            height:40px; text-align:center; display: inline-block; font-size:16px;" type="submit">Login</button>
                        </form>
                    </div>
                    <div class="log-reg">
                        <p >Don't have an Account? <a href="/coba3" style="text-decoration:none;">Register</a> here</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <img src="../assets/img/ealain.png">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, itaque!</p>
                </div>
                <div class="footer-col-2">
                    <h3>Features</h3>
                    <ul>
                        <li><a href="../About/about.html">About</a></li>
                        <li>Lorem, ipsum.</li>
                        <li>Lorem, ipsum.</li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Follow Us!</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Aradicha</p>
        </div>
    </div> --}}
</body>

@endsection

