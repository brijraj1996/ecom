
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
        <div class="subheader text-center">
             <h2>
            Mykart Latest Products:
        </h2>

         <!-- Latest SHirts -->
         <div class="row">
            <div class="small-3 columns">
                @foreach ($products as $product)
                    
               
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        
                        <a href="#">
                           
                            <img src="{{asset($product->image)}}"/>
                        </a>
                    </div>
                <a href="{{route('product', ['id' => $product->id])}}">
                        <h3>
                            {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                        ₹{{$product->price}}
                    </h5>
                    
               
                  
                </div>
                @endforeach
                
            </div>
        </div>
       
       
            
            
           
        <!-- Footer -->

      
    </body>  
    
        
    
    
</html>
@endsection