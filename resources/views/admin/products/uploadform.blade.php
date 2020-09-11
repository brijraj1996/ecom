@extends('layout.main')


@section('content')


<form action="/admin/upload/submit" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }} 
    {{-- Product name: <br> --}}
    <input type="hidden" value="{{request()->id}}" name="product_id" > 
    <br><br>
    Product photos (can attach more than one): <br>
    <input multiple="multiple" name="photos[]" type="file"> 
    <br><br>
    
    <button class="btn btn-primary" type="submit">UPLOAD</button>

    </form>
@stop