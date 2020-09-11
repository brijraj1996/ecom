@extends('layout.main')

@section('content')


<div class="mt-5">
    <h3> Shipping info </h3>
</div>

@if($errors->any())
<div class="card bg-danger text-white">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
</div>
@endif
<form method="POST" action="{{route('address.store')}}">
@csrf
<div class="row">
    <div class="small-6 small-centered columns">
<div class="form-row">
    <div class="form-group">
        <label>Address</label>
    <input type="text" class="form-control" name="address">
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>City</label>
    <input type="text" class="form-control" name="city" >
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>State</label>
    <input type="text" class="form-control" name="state" >
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Zip</label>
    <input type="text" class="form-control" name="zip" >
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Country</label>
    <input type="text" class="form-control" name="country" >
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label>Phone</label>
    <input type="text" class="form-control" name="phone" >
    </div>
</div>

<button type="submit" class="button success">Proceed To Pay</button>
</div>
</div>
</form>
@stop