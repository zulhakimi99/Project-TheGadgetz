@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Computer</h3>
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

    <form action="{{route('computer.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col-md-12">
          <strong>Image :</strong>
          <input type="file" name="image" >
        </div>
        <div class="col-md-12">
          <strong>About :</strong>
          <input type="text" name="about" class="form-control" placeholder="Topic">
        </div>
        <div class="col-md-12">
          <strong>Price :</strong>
          <input type="text" name="price" class="form-control" placeholder="RM">
        </div>
        <div class="col-md-12">
          <strong>Description :</strong>
          <textarea class="form-control" placeholder="Description" name="desc" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('computer.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection