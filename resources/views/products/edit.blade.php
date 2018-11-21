@extends('layouts.app')


@section('content')
  <div class="container">
    <form action="{{ route('products.update', $product->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}">
      </div>
      <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" id="description" class="form-control" rows="8" cols="80">{{ $product->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="price">Precio</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
@endsection
