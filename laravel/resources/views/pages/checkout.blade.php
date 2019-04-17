@extends('layouts.app')

@section('content')





		<!-- SECTION -->
		<div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
    
                        <div class="col-md-7">
                            <!-- Billing Details -->
                            <div class="billing-details">
                                <div class="section-title">
                                    <h3 class="title">Billing address</h3>
                                </div>
                                <form id="billing" method="POST" action="/hz-store/checkout/placeorder">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                    <input class="input" type="text" name="first-name" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="last-name" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="country" placeholder="Country">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="tel" name="tel" placeholder="Telephone">
                                </div>
                                <div class="form-group">
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="create-account">
                                        <label for="create-account">
                                            <span></span>
                                            Create Account?
                                        </label>
                                        <div class="caption">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                            <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <!-- /Billing Details -->
    
                            <!-- Shiping Details -->
                            <div class="shiping-details">
                                <div class="section-title">
                                    <h3 class="title">Shiping address</h3>
                                </div>
                                <form name="shipping">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="shiping-address">
                                    <label for="shiping-address">
                                        <span></span>
                                        Ship to a diffrent address?
                                    </label>
                                    <div class="caption">
                                        <div class="form-group">
                                            <input class="input" type="text" name="first-name" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="last-name" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="address" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="city" placeholder="City">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="country" placeholder="Country">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="tel" name="tel" placeholder="Telephone">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <!-- /Shiping Details -->
    
                            <!-- Order notes -->
                            <div class="order-notes">
                                <textarea class="input" placeholder="Order Notes"></textarea>
                            </div>
                            <!-- /Order notes -->
                        </div>
    
                        <!-- Order Details -->
                        <div class="col-md-5 order-details">
                            <div class="section-title text-center">
                                <h3 class="title">Your Order</h3>
                            </div>
                            <div class="order-summary">
                                <div class="order-col">
                                    <div><strong>PRODUCT</strong></div>
                                    <div><strong>TOTAL</strong></div>
                                </div>
                                <div class="order-products">
                                    @foreach($cart->cartitem as $item)
                                    <div class="order-col">
                                    <div>{{$item->count}}x {{$item->prod->name}}</div>
                                        <div>${{$item->count*$item->prod->price}}</div>
                                    </div>

                                    @endforeach
    
                                </div>
                                <div class="order-col">
                                    <div>Shiping</div>
                                    <div><strong>FREE</strong></div>
                                </div>
                                <div class="order-col">
                                    <div><strong>TOTAL</strong></div>
                                    <div><strong class="order-total">$<span class="total">Loading...</span></strong></div>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="input-radio">
                                    <input type="radio" name="payment" id="payment-1">
                                    <label for="payment-1">
                                        <span></span>
                                        Direct Bank Transfer
                                    </label>
                                    <div class="caption">
                                        <p>Place order to continue</p>
                                    </div>
                                </div>
                                <div class="input-radio">
                                    <input type="radio" name="payment" id="payment-2">
                                    <label for="payment-2">
                                        <span></span>
                                        Cheque Payment
                                    </label>
                                    <div class="caption">
                                     <p>Place order to continue</p>
                                    </div>
                                </div>
                                <div class="input-radio">
                                    <input type="radio" name="payment" id="payment-3">
                                    <label for="payment-3">
                                        <span></span>
                                        Paypal System
                                    </label>
                                    <div class="caption">
                                      <p>Place order to continue</p>
                                    </div>
                                </div>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="terms">
                                <label for="terms">
                                    <span></span>
                                    I've read and accept the <a href="#">terms & conditions</a>
                                </label>
                            </div>
                            <a href="#" class="primary-btn order-submit place">Place order</a>
                        </div>
                        <!-- /Order Details -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /SECTION -->
            <script>
getTotal();
               

function getTotal(){
    
           



    $.ajax({
    url: "/hz-store/cart/total",
    type: 'POST',
data: {'_token' : token},
    cache: false,
    success:function(result){




$('.total').html(result);

   
    },
error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
console.log(JSON.stringify(jqXHR));
console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
$('.modal-body').html(JSON.stringify(jqXHR));
$('#success').modal('show')
}
});
}

$('.place').click(function(){
$('#billing').submit();

})
            </script>


@endsection