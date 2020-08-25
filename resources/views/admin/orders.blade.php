@extends('admin.layout.admin')

@section('content')

<h3>Orders</h3>

<div class="card">
    <div class="mt-5">
        <h3> Add order</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf
            <div>
                <h6  class="section-head">Details</h6>
            </div>
            <hr>

            <div class ="col-md-6 col-md-offset-3">
                <div class="form-row">
                    <div class="form-group">
                        <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group">
                        <label>Description</label>
                    <input type="text" class="form-control" name="description" value="{{old('des')}}">
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="form-group">
                        <label>Price</label>
                    <input type="text" class="form-control" name="size" value="{{old('size')}}">
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="form-group">
                        <label>Size</label>
                        <select name="category_id">
                        
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                        
                        </select>
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="form-group">
                        <label>Image</label>
                    <input type="file" class="form-control" name="image" value="{{old('image')}}" >
                    </div>
                </div>
               
                
                <button class="btn btn-primary">save</button>
            </form>
        </div>
     </div>
 </div>
            

@stop






 