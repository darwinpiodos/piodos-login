
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Template</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
      

<div class="container-fluid px-0">

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

</div>



    </body>
    </html>


    
