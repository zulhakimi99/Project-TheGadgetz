<!DOCTYPE html>
<html lang="en">

<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/template/styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/template/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/template/styles/checkout.css">
<link rel="stylesheet" type="text/css" href="/template/styles/checkout_responsive.css">
</head>

<body>
<div class="container">
<div class="super_container">
	
	<!-- Home -->


    <?php 
    $user = Auth::guard('cust')->user();
    $user_id = $user->id;
    ?>
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

    <!--<form action="{{route('buy.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nama  :</strong>
          <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
        </div>

        <div class="col-md-12">
          <strong>Alamat :</strong>
          <input type="text" name="alamat" class="form-control" placeholder="Nama Siswa">
        </div>
        <div class="col-md-12">
          <strong>Negeri :</strong>
          <input type="text" name="negeri" class="form-control" placeholder="Nama Siswa">
        </div>
        <div class="col-md-12">
          <strong>No Phone:</strong>
          <textarea class="form-control" placeholder="Alamat Siswa" name="no_phone" rows="8" cols="80"></textarea>
        </div>
        <div class="col-md-12">
          <strong>Product :</strong>
          <input type="text" name="product" value="{{$product->about}}"  class="form-control" readonly>
        </div>

        <div class="col-md-12">
          <strong>Price :</strong>
          <input type="text" name="price" value="{{$product->price}}" class="form-control" readonly>
        </div>


        <input type="hidden" value="{{$user_id}}" name='user_id'>

        <div class="col-md-12">
          <a href="{{route('buy.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div> -->

<!-- Checkout -->
<form action="{{route('buy.store')}}" method="post">
  @csrf
<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Billing Address</div>
						<div class="section_subtitle">Enter your address info</div>
						<div class="checkout_form_container">
							<form action="#" id="checkout_form" class="checkout_form">
								<div>
										<!-- Name -->
										<label for="checkout_name">Name*</label>
										<input type="text" name="nama" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">Address*</label>
									<input type="text" name="alamat" class="checkout_input" required="required">
								</div>
								<div>
								<div>
									<!-- Address -->
									<label for="checkout_address">State*</label>
									<input type="text" name="negeri" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Zipcode -->
									<label for="checkout_zipcode">Phone Number*</label>
									<input type="text" name="no_phone" class="checkout_input" required="required">
								</div>
								
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Product</div>
								<div class="order_list_value ml-auto">Total</div>
              </div>
              <input type="hidden" value="{{$user_id}}" name='user_id'>
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><input type="text" name="product" value="{{$product->about}}" readonly></div>
									<div class="order_list_value ml-auto"><input type="text" name="price" value="{{$product->price}}" readonly></div>
								</li>
              </ul><br>
              <center>
              <div class="col-md-12">
              <a href="{{url('cust')}}" class="btn btn-sm btn-success">Back</a>
              <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </div>
</center>
						</div>

         

						<!-- Order Text -->
						
					</div>
				</div>
			</div>
		</div>
  </div>
</form>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">Sublime.</a></div>
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
</div>
</div>

<script src="/template/js/jquery-3.2.1.min.js"></script>
<script src="/template/styles/bootstrap4/popper.js"></script>
<script src="/template/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/template/plugins/greensock/TweenMax.min.js"></script>
<script src="/template/plugins/greensock/TimelineMax.min.js"></script>
<script src="/template/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/template/plugins/greensock/animation.gsap.min.js"></script>
<script src="/template/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/template/plugins/easing/easing.js"></script>
<script src="/template/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/template/js/checkout.js"></script>
</body>
</html>