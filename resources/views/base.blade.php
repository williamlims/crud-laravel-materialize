<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Import Google Icon Font-->
        <link href="{{asset('fonts/icon.css')}}" rel="stylesheet">
        <link href="{{asset('css/materialize.min.css')}}"  rel="stylesheet" media="screen,projection">
        <title>Crud Laravel Materialize</title>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><i class="large material-icons">fiber_new</i> Crud</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Home</a></li>
                    <li><a href="badges.html">New Item</a></li>
                    <li><a href="collapsible.html">Registers</a></li>
                    <li><a href="mobile.html">About</a></li>
                    <li><a class="waves-effect waves-light btn" style="background-color:#483D8B;" href="#"><i class="material-icons left">email</i>Contact</a></li>
                </ul>

            </div>
        </nav>
        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
        </div>
        <nav>
            
            <div class="nav-wrapper">
              <div class="col s12" style="background-color:#363636;">
                <a href="#!" class="breadcrumb">First</a>
                <a href="#!" class="breadcrumb">Second</a>
                <a href="#!" class="breadcrumb">Third</a>
              </div>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright Crud System
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

        <script src="{{asset('js/materialize.min.js')}}"></script>
        <script src="{{asset('js/settings.js')}}"></script>
    </body>
</html>