@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TIPRO 16</div>

                <div class="panel-body">
                    <div class="row">
                      <div class="col-md-3">
                        <a href="#">
                        <div class="panel panel-default">
                          <img src="{{ URL::to('/') }}/themes/img/laptop/Asus/as1.jpg" alt="" style="width:100%;">
                          <div class="panel-body">
                            Mac
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="#">
                        <div class="panel panel-default">
                          <img src="{{ URL::to('/') }}/themes/img/laptop/Asus/as1.jpg" alt="" style="width:100%;">
                          <div class="panel-body">
                            Lenovo
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="#">
                        <div class="panel panel-default">
                          <img src="{{ URL::to('/') }}/themes/img/laptop/Asus/as1.jpg" alt="" style="width:100%;">
                          <div class="panel-body">
                            Asus
                          </div>
                        </div>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="#">
                        <div class="panel panel-default">
                          <img src="{{ URL::to('/') }}/themes/img/laptop/Asus/as1.jpg" alt="" style="width:100%;">
                          <div class="panel-body">
                            Tosiba
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
