@extends('admin.layout.admin')

@section('content')


<div class ="navbar">
    <a class="navbar-brand" href="#">Categories=></a>
    <ul class ="nav navbar-nav">
        @if(!empty($categories))
        @forelse($categories as $category)
        <li>
            <a href="#">{{$category->name}}</a>
        </li>
        @empty
        <li>No data</li>
        @endforelse
        @endif
    </ul>

<div class="card">
    <div class="mt-5">
        <h3> Add categories</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('categories.store')}}">
            @csrf
            <div>
                <h6  class="section-head">Details</h6>
            </div>
            <hr>

            <div class ="col-md-6 col-md-offset-3">
                <div class="form-row">
                    <div class="form-group">
                        <label>Name</label>
                    <input type="text" class="form-control" name="name" >
                    </div>
                </div>

            <input type = "submit" value = "submit">

@endsection