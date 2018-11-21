@extends('layouts.app')


@section('content')
  <div class="container">
      <div class="card mb-3">
          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
          <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><small class="text-muted">{{ $product->price }}</small></p>
          </div>
    </div>
  </div>
@endsection
