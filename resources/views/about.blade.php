@extends('layouts.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</html>

@section('container')
<body>
   
    <!-- <div class="container">
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="../Home Page/home.html">Home</a></li>
                    <li><a href="../Explore/explore.html">Explore</a></li>
                    <li><a href="../Login & Register/login.html">Account</a></li>
                </ul>
            </nav>
        </div> -->

        <div class="row">
            <div class="col-2">
                <h1>Lorem, ipsum dolor sit amet consectetur<br>Adipisicing elit.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit<br>Voluptates eos placeat ipsum error perferendis! Neque aspernatur quae ullam!</p>
            </div>
            <div class="col-2">
                <img src="../assets/img/Group 5.png">
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="contact-title">
            <h1>Contact</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit<br>Voluptates eos placeat ipsum error perferendis! Neque aspernatur quae ullam!</p>
        </div>
        <div class="row">
            <div class="col-3a">
                <a href="">
                    <img src="../assets/img/aradicha.png">
                </a>
            </div>
            <div class="col-3a">
                <a href="">
                    <img src="../assets/img/assw.png">
                </a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <img src="../assets/img/ealain.png" width="50px">
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
    </div>

</body>

@endsection
