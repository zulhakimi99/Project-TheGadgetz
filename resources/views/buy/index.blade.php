@extends('layouts.auth2')
@section('content')

<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(template/images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Your Orders<span>.</span></div>
								<div class="home_text"><p>Down There You Can Find All Of Your Purchase On This Website.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3 style="padding-top:50px;">My Order</h3>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Name</th>
        <th>Address</th>
        <th>State</th>
        <th>Phone Number</th>
        <th>Product</th>
        <th>Price</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($buys as $buy)
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
              <a class="btn btn-sm btn-success" href="{{route('buy.show',$buy->id)}}">Show</a>
              @csrf
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $buys->links() !!}
  </div>
@extends('layouts.script')
@endsection