
@extends('layout.main')

@section('content')

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title', 'Mykart')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="dist/css/foundation.css"/>
        <link rel="stylesheet" href="dist/css/app.css"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
       
            
        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to Mykart store
                </strong>
            </h2>
            <br>
            <a href="{{route('products')}}"><button class="button large">Check out My Shirts</button></a>
        </section>
        <br/>
       
       
            
            
           
        <!-- Footer -->

      
    </body>  
    
        
    
    
</html>
@endsection