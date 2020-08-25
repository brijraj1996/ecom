@extends('admin.layout.admin')

@section('content')




<div class ="navbar">
    <a class="navbar-brand" href="#">Categories=></a>
    <ul class ="nav navbar-nav">
        @if(!empty($categories))
        @forelse($categories as $category)
        <li>
        <a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a>
        </li>
        @empty
        <li>No data</li>
        @endforelse
        @endif
    </ul>

    <a class="btn btn-primary" href="{{ route('categories.create') }}">Add categories</a>
    </button>


    @if(!empty($products))
    <section>
        <h3>Products</h3>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Products</th>
                </tr>
            </thead>
        </tbody>

        @forelse($products as $product)
        <tr>
            <td>{{$product->name}}</td>
        </tr>
        @empty 
        <tr><td>No data</td></tr>

        @endforelse
    </tbody>

        </table>
    </section>
@endif

@endsection