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
             @forelse($shirts as $shirt)
        <div class ="col-md-6 col-md-offset-3">
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                       
                        <a href="#">
                        <img src="{{asset($shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="shirt/{{$shirt->id}}">
                        <h3>
                            <a href="{{route('shirt', ['id' => $shirt->id])}}">
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
            </div>
        </div>
            @empty
                <h3>No products</h3>
            @endforelse
            
           

@endsection