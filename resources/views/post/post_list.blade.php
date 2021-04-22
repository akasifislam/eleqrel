@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary float-right mt-1">add new</a>
                <table class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key => $post)
                            <tr>
                                <th>{{ $key+1 }}</th>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->image->path }}</td>
                                <td>
                                    <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">edit</a>
                                        <button class="btn btn-danger btn-sm'">delete</button>
                                    </form>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection