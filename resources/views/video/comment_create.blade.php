@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $video->name }}</h2>
            <div class="col-md-8">
                <form method="POST" action="{{ route('comment.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $video->id }}" name="video_id">
                    <div class="form-group">
                      <label for="body">Video</label>
                      <input type="text" class="form-control" name="body" id="body" placeholder="Product Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection