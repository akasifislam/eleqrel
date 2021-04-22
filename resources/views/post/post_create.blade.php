@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Post Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                    </div>
                    {{-- <div class="form-group">
                        <input type="file" name="path" class="form-control"  >    
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection