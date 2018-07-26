<!DOCTYPE html>
<html>
<head>
    <title>Subletor - Please verify your email address</title>
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
        <div class="container">
            <h2 class="display-4">Almost there...</h2>
            <p>
                <a href="{{url('user/verify', $user->verifyUser->token)}}">Please click here to verify your email</a>. By confirming your 
                account, all future Subletor notifications will be sent to this email address.
            </p>
            <p>
                Sincerely,<br>
                Subletor Support.
            </p>
        </div>
    </body>

</html>