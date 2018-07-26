<html lang="en">
<head>
  <title>Subletor Limited</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Subletor Limited">
  <meta name="author" content="Brian Okinyi">

  <!-- Bootstrap4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <style>
        /* General */
        html, body{
            font-family: 'Raleway', sans-serif;
        }

        .container{
            padding-left: 30px;
            padding-right: 30px;
        }

        a{
            color: #1c7989;
        }

        .btn{
            border-radius: 0 !important;
        }
        .btn-outline-secondary{
            color: #fff;
            border-color: #fff !important;
        }
        .btn-outline-secondary:focus{
            border-color: #fff !important;
        }
        .btn-outline-secondary:hover{
            color: #1c7989;
            background-color: #fff;
        }
        .outline-secondary:focus {
            box-shadow: 0 0 0 0.2rem #fff;
        }
        .outline-secondary:focus {
            box-shadow: 0 0 0 0.2rem #fff;
        }
        /* Navbar */
        @media (min-width: 768px) {
        .navbar-brand.abs
            {
                position: absolute;
                width: 100%;
                left: 0;
                text-align: center;
            }
        }
        .navbar-dark{
            background-image: #1c7989;
        }

        .bg-yellow{
            background-color: #1c7989;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2)
        }

        /* Content */
        .jumbotron{
            color: #fff;
            background: #1c7989;
            min-height: 350px;
            padding: 40px 20px;
        }

        footer{
            border-top: 1px solid rgba(28,121,137, 0.5);
            border-bottom: 1px solid rgba(28,121,137, 0.5);
        }

        .footer-dark{
            background: rgba(28,121,137, 0.1);
        }

        .social-icons a{
            font-size: 2em;
            color: rgb(150, 150, 150);
            padding: 20px 5px;
        }

        .bottom-links{
            padding: 10px 0;
        }

        .nav{
            flex-wrap: nowrap;
        }
        .nav-link{
            padding: 0 .2em !important;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-yellow">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/logo/logo-200x200.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            Subletor
        </a>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="{{asset('img/logo/logo-200x200.svg')}}" style="max-width: 150px;" class="rounded-circle mx-auto d-block" alt="Logo">
            <h1 class="display-4 text-uppercase">WELCOME ABOARD</h1>
            <h2>We'll be in touch.</h2>
            <input ty href="subletor.com" class="btn btn-outline-secondary">Book an Office</button>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <p>
                Hi there,
            </p>

            <p>
                Thanks for signing up with your email, {{$user_email}} to keep in touch with Subletor. From 
                now on, you'll get regular updates on special offers from us.
                And since, you'll be the first to knwo, you can always get an office 
                witht th best company. 
                
                <br>
                <br>
                In the meantime, check out the available office and jump to
                working from there.
            </p>
            <p class="sender">
                Cheers,<br>
                Brian Okinyi,<br>
                <b>CTO</b>, Subletor Limited.
            </p>
        </div>
    </div>

    <div class="container-fluid footer">
        <footer>
            <div class="row footer-dark">
                <div class="col">
                    <!--  -->
                </div>
                <div class="col social-icons">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="#" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" title="Facebook">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" title="Facebook">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <!--  -->
                </div>
            </div>

            <div class="bottom-links">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="https://www.subletor.com/" class="nav-link">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.subletor.com/" class="nav-link">
                            Email Preferences
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.subletor.com/" class="nav-link">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

    <!-- Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>