@extends('layout.main')

@section('content')

<div class="row">
<h3>Cart items</h3>


<table class ="table table-hover">
   
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Size</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($cartItems as $cartItem)
        <tr>
        <td>{{$cartItem->name}}</td>
        <td>{{$cartItem->price}}</td>
        <td>
      
        <form method="POST" action="{{route('cart.update',$cartItem->__raw_id)}}">   
            @method('PUT')
            {{csrf_field()}}
            <input name="qty" type="text" style="width: 50px" value="{{$cartItem->qty}}">
            <input type="submit" class="btn btn-sm btn-default" value="OK"> 
        </form>
    </td>
        <td>{{$cartItem->size}}</td>
        <td><form method ="POST" action="{{route('cart.destroy',$cartItem->__raw_id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="button" type="submit" value="Delete"></td>
        

        </tr>

        @endforeach
        <tr>
            <td></td>
       
        <td>Grand Total: ₹{{\ShoppingCart::totalPrice()}}</td>
        <td>Items: {{\ShoppingCart::count()}}</td>

       
    </tbody>
</table>

<a href="{{url('/checkout')}}" class="button">Checkout</a>
</div>
@stop
            