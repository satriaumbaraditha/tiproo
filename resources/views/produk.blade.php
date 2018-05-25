@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($products as $product)
  <div class="col-md-5" style="border-radius: 20px;" >
    <img style="background-color:powderblue; border-radius: 20px;" src="{{$product->photo_path}}">
  </div>
  <div class="col-md-5" style="border-radius: 20px;" >
    <p style = "font-size:16px";>Name : {{$product->name}}</p>
    <p style = "font-size:16px";>Model : {{$product->model}}</p>
    <p style = "font-size:16px";>Price : {{$product->price}}</p>
    <p style = "font-size:16px";>Description : {{$product->description}}</p>
  </div>

  @endforeach

  <div class="col-md-6" style="text-align: left;">
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
