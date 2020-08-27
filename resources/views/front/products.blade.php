@extends('layout.main')
   
@section('title','Shirts')
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

   <!-- products listing -->
         <!-- Latest SHirts -->
         <div class="row">
             @forelse($products as $shirt)
       

                        <div class="subheader text-center">
                            <h2>
                          
                           </h2>

                            <a href="#">
                            <img src="{{asset($shirt->image)}}"/>
                            </a>
                           
                            <a href="shirt/{{$shirt->id}}">
                                <h3>
                                    <a href="{{route('product', ['id' => $shirt->id])}}">
                                    {{$shirt->name}}
                                 </h3>
                            </a>
                            <h5>
                            ₹{{$shirt->price}}
                             </h5>
                            <p>
                            {{$shirt->description}}
                            </p>
       
                    </div>  
            @empty
    <h3>No products</h3>
    @endforelse
            
                        

@endsection