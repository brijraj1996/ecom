@extends('admin.layout.admin')

@section('content')


<h3>Name of Products:</h3>

<br>
<br>

<ul>
    @forelse($products as $product)
    <li>
    <h4>Name of product:{{$product->name}}</h4>
  

    </li>

    @empty 
        <h4>No products found</h4>

        
    
    @endforelse
</ul>

@endsection