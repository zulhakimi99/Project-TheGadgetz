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
          <strong>Image: </strong> <img width="150px" src='{{asset('images/'.$computer->image)}}'>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>About: </strong> {{$computer->about}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Price: </strong> {{$computer->price}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Description: </strong> {{$computer->desc}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('computer.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection