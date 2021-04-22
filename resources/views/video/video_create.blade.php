@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <form method="POST" action="{{ route('video.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Video</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection