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
          <strong>Nama: </strong> {{$feedback->nama}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Rating: </strong> {{$feedback->rating}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Comment: </strong> {{$feedback->coment}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('feedback.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection