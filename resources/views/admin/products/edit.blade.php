@extends('admin.layout.admin')

@section('content')

@if($errors->any())
    <div class="card bg-danger text-white">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
<div class="card">
    <div class="mt-5">
        <h3> Edit Product</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
            @csrf
             

        @method('PUT')

            <div class ="col-md-6 col-md-offset-3">
                <div class="form-row">
                    <div class="form-group">
                        
                            
                        <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name', $product->name)}}">
                    </div>
                </div>
    
                <div class="form-row">
                    <div class="form-group">
                        <label>Description</label>
                    <input type="text" class="form-control" name="description" value="{{old('description', $product->description)}}">
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="form-group">
                        <label>Price</label>
                    <input type="text" class="form-control" name="price" value="{{old('price', $product->price)}}">
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="form-group">
                        <label>Size</label>
                        <select name="category_id">
                        
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{old('name',$category->name)}}</option>
                      @endforeach
                        
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Image</label>
                    <input type="file" class="form-control" name="image" >
                    </div>
                </div>
               
                
                <button class="btn btn-primary">Edit</button>
            </form>
        </div>
     </div>
 </div>
            

@stop






 