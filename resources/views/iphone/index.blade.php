@extends('layouts.app2')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">List Phone</h2>
                        
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Phone Record</li>
                                    </ol>
                                    <h2>Filterable Table</h2>
<p>Type something in the input field to search for iphone</p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>
                                    <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('iphone.create') }}">Add New Accessories</a>
      </div>
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
                                    <table class="table table-striped table-bordered first" id="myTable">
                                        <thead>
                                            <tr>
                                            <th width = "50px"><b>No.</b></th>
                                            <th>Image</th>
                                            <th>About</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th width = "180px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                            @foreach ($iphones as $iphone)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td> <img width="150px" src='{{asset('images/'.$iphone->image)}}'></td>
          <td>{{$iphone->about}}</td>
          <td>{{$iphone->price}}</td>
          <td>{{$iphone->desc}}</td>
    
          <td>
            <form action="{{ route('iphone.destroy', $iphone->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('iphone.show',$iphone->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('iphone.edit',$iphone->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>



  </div>
@endsection