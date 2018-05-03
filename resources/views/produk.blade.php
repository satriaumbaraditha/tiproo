@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($products as $product)
      <div class="col-md-6">
        <h1>Name : {{$product->name}}</h1>
        <h1>Model : {{$product->model}}</h1>
        <h1>Price : {{$product->price}}</h1>
        <h1>Description : {{$product->description}}</h1>
      </div>
  @endforeach
</div>
@endsection
