@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Biodata Siswa</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('computer.update',$computer->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
      <div class="col-md-12">
      <strong><img width="150px" src='{{asset('images/'.$computer->image)}}'></strong>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="col-md-12">
          <strong>About :</strong>
          <input type="text" name="about" class="form-control" value="{{$computer->about}}">
        </div>
        <div class="col-md-12">
          <strong>Price :</strong>
          <input type="text" name="price" class="form-control" value="{{$computer->price}}">
        </div>
        <div class="col-md-12">
          <strong>Description :</strong>
          <textarea class="form-control" name="desc" rows="8" cols="80">{{$computer->desc}}</textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('computer.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection