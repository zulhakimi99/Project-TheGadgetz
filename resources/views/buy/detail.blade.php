@extends('layouts.auth')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Order</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama: </strong> {{$buy->nama}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Alamat : </strong> {{$buy->alamat}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Negeri : </strong> {{$buy->negeri}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>No Phone: </strong> {{$buy->no_phone}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Product : </strong> {{$buy->product}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Price : </strong> {{$buy->price}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('buy.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection