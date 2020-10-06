@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Siswa</h3>
        <hr>
      </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="form-group">
          <strong>Image: </strong> <img width="150px" src='{{asset('images/'.$iphone->image)}}'>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Aboyt: </strong> {{$iphone->about}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Price: </strong> {{$iphone->price}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Description: </strong> {{$iphone->desc}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('iphone.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection