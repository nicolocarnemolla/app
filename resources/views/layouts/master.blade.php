<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">
  </head>

  <body>
    <header>
    @include ('layouts.nav')
    </header>
    <main>
    @yield ('content')
    </main>
    
      
      
      

     @include ('layouts.footer')
    
    
    @yield('javascript')
    
  </body>
</html>
