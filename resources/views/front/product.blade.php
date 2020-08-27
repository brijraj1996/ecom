@extends('layout.main')
@section('title',$product->name)
@section('content')
<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">
    <div class="small-5 small-offset-1 columns">
    
        <div class="item-wrapper">
            <div class="img-wrapper">

                <div class="subheader text-center">
                    <h2>
                   Mykart Latest Products:
                    </h2>
                
                     <a href="#">
                    <img height="150px" src="{{asset($product->image)}}"/>
                    </a>
                        </div>
                
    
                
                        <span class="price-tag">₹{{$product->price}}</span> {{$product->name}}
                    </h3>

                        <p>
                            {{$product->description}}
                        </p>

                     <div class="row">
                
                        <div class="large-12 columns">
                            <label>
                                Select Size
                            <select>
                                <option value="small">
                                Small
                            </option>
                            <option value="medium">
                                Medium
                            </option>
                            <option value="large">
                                Large
                            </option>
                        
                        </select>
                    </label>

                  

                    @auth
                    <a href="{{route('success')}}" class="button  expanded">Buy now</a>
                    @else
                        <a href="{{ route('login') }}">Login to buy</a>
                        @endauth
                </div>        
            
            </div>

        </div>

        </div>
    </div>
</div>
@endsection