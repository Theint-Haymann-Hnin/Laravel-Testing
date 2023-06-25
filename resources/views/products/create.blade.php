@extends('products.layout')
@section('content')
<form>
    @csrf
  
     <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <h5>Create Page</h5>
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>
    </div>
   
</form>

@endsection
