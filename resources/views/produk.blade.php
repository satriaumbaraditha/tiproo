@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($products as $product)
  <p style="text-align: center;">
    <img style="background-color:powderblue; border-radius: 20px;" src="{{$product->photo_path}}">
  </p>
  <div class="col-md-12" style="background-color:powderblue; border-radius: 20px;" >
    <p style = "font-size:24px";>Name : {{$product->name}}</p>
    <p style = "font-size:24px";>Model : {{$product->model}}</p>
    <p style = "font-size:24px";>Price : {{$product->price}}</p>
    <p style = "font-size:24px";>Description : {{$product->description}}</p>
  </div>

  @endforeach
  <div class="col-md-12" style="text-align: center;">
  <p>
      {!! Form::open(['url'=>'cart', 'method'=>'post', 'class'=>'form-inline']) !!}
          {!! Form::hidden('product_id', $product->id) !!}
          <div class="form-group">
              {!! Form::number('quantity', null, ['class'=>'form-control', 'min'=>1, 'placeholder'=> 'Jumlah Order']) !!}
          </div>
          {!! Form::submit('Tambah Ke Cart', ['class'=>'btn btn-primary']) !!}
      {!! Form::close() !!}
  </p>
  </div>
</div>

@endsection
