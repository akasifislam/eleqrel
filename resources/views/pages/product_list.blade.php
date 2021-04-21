@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('product.create') }}" class="btn btn-primary float-right mt-1">add new</a>
            <table class="table table-bordered table-striped table-hover mb-1">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">category</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $key => $product)     
                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td> {{ $product->name }} </td>
                    <td>
                      @foreach ($product->categories as $category)
                          
                      <span>{{ $category->name }}</span>
                        @if (!$loop->last)
                            <span class="text-danger text-bold">|</span>
                        @endif
                      @endforeach
                    </td>
                    <td style="width: 300px">
                      <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary">edit</a>
                        <button class="btn btn-danger">delete</button>
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