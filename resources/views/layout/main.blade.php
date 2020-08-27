
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','Mykart')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
           
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                <a href="{{route('admin.index')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       Mykart Shirts
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                    <a href="{{route('products')}}">
                            SHIRTS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            CONTACT
                        </a>
                    </li>


                    @auth
                    <a href="{{route('logout')}}">LOGOUT</a>
                @else
                    <a href="{{ url('/login') }}">LOGIN</a>
                @endauth

                      
                </ol>
                
            </div>
        </div>
        
        @yield('content')  

          
        <!-- Footer -->
       
        <br>
<footer class="footer">
  <div class="row full-width">
    <div class="small-2 medium-2 large-2 columns">
      <i class="fi-laptop"></i>
      <p>Coded with love.</p>
    </div>
    <div class="small-2 medium-2 large-2 columns">
      <i class="fi-html5"></i>
      <p>Always providing the best quality products with the fastest possible courier service. "No matter how far you are we will reach you" is our motto!</p>
    </div>
    
    <div class="small-2 medium-2 large-2 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
      <ul>
    </div>
  </div>
</footer>

    <script src="(dist/js/vendor/jquery.js)"></script>
    <script src="dist/js/app.js"></script>
    </body>
</html>
