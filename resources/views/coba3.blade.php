@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                  <div class="register-container">
                      <h2>Register</h2>
                      <form action="/register" method="POST">
                          @csrf
                          <input type="text" placeholder="Name" name="name" id="name" required value="{{ old('name') }}" class="form-control @error('name')is-invalid @enderror">
                          @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                          <input type="text" placeholder="Username" name="username" id="username" required value="{{ old('username') }}" class="form-control @error('username')is-invalid @enderror">
                          @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                          <input type="email" placeholder="Email Adress" name="email" id="email" class="form-control @error('email')is-invalid @enderror" id="email" required value="{{ old('email') }}">
                          @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                          <input type="password" placeholder="Password" name="password" id="password" required class="form-control @error('password')is-invalid @enderror" id="password">
                          <button class="w-100 btn btn-lg"
                            style="background-color:#f44336; color:white; border-radius:10px;
                            height:40px; text-align:center; display: inline-block; font-size:16px;" type="submit">Register
                          </button>
                      </form>
                  </div>
                  <div class="log-reg">
                      <p>Already have an Account? <a href="/coba" style="text-decoration:none;">Login</a></p>
                  </div>
              </div>

          </div>
      </div>
  </div>
</body>

@endsection

