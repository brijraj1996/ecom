@extends('admin.layout.admin')
 
@section('content')


<h3>Name of Products:</h3>

<br>
<br>

<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
   
   <table>
        <tr>
            <th>Name</th>   
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>      
            <th>Add images</th>      
        </tr>
       @foreach  ($products as $product)
           
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->category->name}}</td>
         
          <td><a href="{{route('products.edit',['product' =>$product->id])}}" class="btn btn-primary btn-mini">Edit Product</a></td>
          <form method ="POST" action="{{route('products.destroy',$product->id)}}">
          <td><button type="submit" class ="btn btn-sm btn-danger">Delete</a>  
            <td><a href="{{url('admin/upload',['product' =>$product->id])}}" class="btn btn-primary btn-mini">Add images</a></td>  
          @csrf
          @method('DELETE')
      

            
          </form>  
        </td>
        </tr>
        @endforeach
      </table>
@stop