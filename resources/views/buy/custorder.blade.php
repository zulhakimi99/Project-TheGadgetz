@extends('layouts.app2')
@section('content')

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Customer Purchase Record</h2>
                            
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Sales Record</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Record</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                            <th width = "50px"><b>No.</b></th>
        <th width = "300px">Nama Customer</th>
        <th>Alamat</th>
        <th>Negeri</th>
        <th>No Phone</th>
        <th>Product</th>
        <th>Price</th>
        <th width = "180px">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($buys as $buy)
                                        <tbody>
                                            <tr>
                                            <td><b>{{++$i}}.</b></td>
          <td>{{$buy->nama}}</td>
          <td>{{$buy->alamat}}</td>
          <td>{{$buy->negeri}}</td>
          <td>{{$buy->no_phone}}</td>
          <td>{{$buy->product}}</td>
          <td>{{$buy->price}}</td>
          <td>
            <form action="{{ route('buy.destroy', $buy->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
                                            </tr>
                                        </tfoot> 
                                         @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>

{!! $buys->links() !!}
  </div>
@endsection