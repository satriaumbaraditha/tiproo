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
  <!-- <p>
      {!! Form::open(['url'=>'cart', 'method'=>'post', 'class'=>'form-inline']) !!}
          {!! Form::hidden('product_id', $product->id) !!}

          <div class="form-group">
              {!! Form::number('quantity', null, ['class'=>'form-control', 'min'=>1, 'placeholder'=> 'Jumlah Order']) !!}
          </div>
          {!! Form::submit('Tambah Ke Cart', ['class'=>'btn btn-primary']) !!}
      {!! Form::close() !!}

  </p> -->
</div>

@endsection
