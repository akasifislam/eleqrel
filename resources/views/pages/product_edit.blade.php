@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <form method="POST" action="{{ route('product.update',$product->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="name">Product Name</label>
                      <input type="text" value="{{ $product->name }}" class="form-control" name="name" id="name" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                      <label for="categories">Categories</label>
                      <select class="form-control" name="categories[]" id="categories" multiple>
                          <option value=""> ---select--- </option>
                            @foreach ($categories as $key=>$category)
                          <option 
                            @if (in_array($category->id,$product->categories->pluck('id')->toArray()))
                                selected
                            @endif
                          value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection