@extends('products.layout')
@section('content')
<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <h5>Edit Page</h5>
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name', $product->name) }}">
                @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control @error('detail') is-invalid @enderror" style="height:150px" name="detail" placeholder="Detail">{{ old('name', $product->detail) }}</textarea>
                 @error('detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>
    </div>
</form>
@endsection
