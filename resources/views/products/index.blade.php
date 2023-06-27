@extends('products.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
@if ($message = Session::get('success'))
            <p class="mt-2 mb-2 alert alert-success">{{ $message }}</p>
@endif
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        <tr>
        @foreach($products as $product)
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i
                     class="fa fa-trash"></i>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection