@extends('products.layout')
@section('content')
<form action="{{ route('products.store') }}" method="POST">
    @csrf
     <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <h5>Create Page</h5>
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Name">
                @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control @error('detail') is-invalid @enderror" style="height:150px" name="detail" placeholder="Detail"></textarea>
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
