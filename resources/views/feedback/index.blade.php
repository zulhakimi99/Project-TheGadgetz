@extends('layouts.app2')
@section('content')
<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Customer Rating Record</h2>
                        
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Rating Record</li>
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
        <th>Nama</th>
        <th>Rating</th>
        <th>Coment</th>
        <th width = "180px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($feedbacks as $feedback)
                                            <tr>
                                            <td><b>{{++$i}}.</b></td>
          <td>{{$feedback->nama}}</td>
          <td>{{$feedback->rating}}</td>
          <td>{{$feedback->coment}}</td>
          <td>
            <form action="{{ route('feedback.destroy', $feedback->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('feedback.show',$feedback->id)}}">Show</a>
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
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
              
{!! $feedbacks->links() !!}
  </div>
@endsection