@extends('layouts.app')

@section('content')
	

  
      <!-- SECTION -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
  
            <!-- section title -->
            <div class="col-md-12">
              <div class="section-title">
                <h3 class="title">Welcome to HZ-Electronics</h3>
         
              </div>
            </div>
            <!-- /section title -->
  
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /SECTION -->
      
      		<!-- SECTION -->
		<div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- shop -->
            <div class="col-md-12 col-xs-6">
              <div class="shop">
                <div class="shop-img">
                  <img src="" alt="">
                </div>
                <div class="shop-body">
                  <h3>Laptop<br>Collection</h3>
                  <a href="store" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- /shop -->
  
    
  
       
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /SECTION -->
  
            <!-- HZ GRAND OPENING SECTION -->
      <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="hot-deal">
                     <h1 class="text-uppercase">Grand opening</h1>
                       <p style="color: red">Everything is not free for limited time</p>
                <ul class="hot-deal-countdown">
                  <li>
                    <div>
                      <h3 class="d">00</h3>
                      <span >Days</span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <h3 class="h">00</h3>
                      <span>Hours</span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <h3 class="m">00</h3>
                      <span>Mins</span>
                    </div>
                  </li>
                  <li>
                    <div>
                      <h3 class="s">00</h3>
                      <span>Secs</span>
                    </div>
                  </li>
                </ul>
             
           
				   <p>After ending everything will still be not free but with no timer</p>
                <a class="primary-btn cta-btn" href="store">Shop now</a>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /HOT DEAL SECTION -->

      <!-- SECTION -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
  
            <!-- section title -->
            <div class="col-md-12">
              <div class="section-title">
                <h3 class="title">Features</h3>
            
              </div>
            </div>
            <!-- /section title -->
  

          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /SECTION -->
  
      <!-- SECTION -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-4 col-xs-6">
              <div class="section-title">
                <h4 class="title">New Products</h4>
                <div class="section-nav">
                  <div id="slick-nav-3" class="products-slick-nav"></div>
                </div>
              </div>
  
              <div class="products-widget-slick" data-nav="#slick-nav-3">
                <div>
                                 @foreach($products as $product)
                  <!-- product widget -->
                  <div class="product-widget">
                    <div class="product-img">
                      <img src=" {{ asset('storage/img/'.$product->image) }}" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">{{$product->cat->name}}</p>
                      <h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
                      <h4 class="product-price">${{$product->price}} <del class="product-old-price">${{$product->price + 199}}</del></h4>
                    </div>
                  </div>
                  <!-- /product widget -->
  @endforeach

                </div>
              </div>
            </div>
  
         
  
           
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /SECTION -->
      <script>
          
          // Set the date we're counting down to
var countDownDate = new Date("May 10, 2018 11:30:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  $('.d').html(days);
  $('.h').html(hours);
  $('.m').html(minutes);
  $('.s').html(seconds);


  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    $(".hot-deal").html("EXPIRED");
  }
}, 1000);
          </script>
@endsection
 