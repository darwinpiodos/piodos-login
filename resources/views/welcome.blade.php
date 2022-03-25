<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 30px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .link-darwin{

                text-decoration:none;
                margin-left:20px;
                color:white;
                font-weight:600;
                font-size:20px;
            }

            .link-darwin:hover{
                color:whitesmoke;
            }

            .image-logo{
                width:80px;
                margin:10px 10px;


            }

            .logo-part{
                display:flex;
              
                align-items:center;
            }
            .text-logo{

                display:flex;
                flex-direction:column;
                margin-left:10px;
            }
            .navbar-brandx{

                text-decoration:none;
                color:white;
                font-size:22px;
                font-weight:bold;
            }

            .navbar-brandx:hover{
            color:whitesmoke;
            
            }
            .mlgcl{
                font-size:35px;
                font-weight:bold;
            }
            .covid{
                font-size:18px;
                font-weight:bold;

            }

            .ul-flex{

                display:flex;
                align-items:center;
                justify-content:center;
                position: absolute;
                right:50px;
                color:white;
            }
           
        </style>
    </head>
    <body>


 


    <nav class="navbar navbar-expand-lg navbar-light bg-success">
<div class="container-fluid">

<div class="logo-part">

        <div class="picture-logo">
            <a href="#">                
            <img src="image/logo-mlg.png" class="image-logo">
            </a>
        </div>
           
        <div class="text-logo">
            <a class="navbar-brandx mlgcl " href="#">MLGCL</a>
            <a class="navbar-brandx covid" href="#">COVID-19 CONTACT TRACING SYSTEM</a>
        </div>
            
       

</div>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">


  <ul class="navbar-nav ul-flex">



  @if (Route::has('login'))
                @auth

                
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="link-darwin">Home</a>    
                    </li>
                   
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="link-darwin">Login</a>
                    </li>

                    @if (Route::has('register'))

                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="link-darwin">Register</a>
                    </li>
                    @endif
                @endauth

        @endif



 
  </ul>



</div>
</div>
</nav>












    

            <div class="content">

            
         
  

                <div class="title m-b-md">
                    Laravel
                </div>
               
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>



       
    </body>
</html>
