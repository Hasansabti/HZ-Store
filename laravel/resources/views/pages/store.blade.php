@extends('layouts.app')

@section('content')

		<!-- SECTION -->
		<div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- ASIDE -->
                        <div id="aside" class="col-md-3">
                            <!-- aside Widget -->
                            <div class="aside">
                                <h3 class="aside-title">Categories</h3>
                                <div class="checkbox-filter">
    
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="category-1">
                                        <label for="category-1">
                                            <span></span>
                                            Laptops
                                            <small>(120)</small>
                                        </label>
                                    </div>
    
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="category-2">
                                        <label for="category-2">
                                            <span></span>
                                            Smartphones
                                            <small>(740)</small>
                                        </label>
                                    </div>
    
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="category-3">
                                        <label for="category-3">
                                            <span></span>
                                            Cameras
                                            <small>(1450)</small>
                                        </label>
                                    </div>
    
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="category-4">
                                        <label for="category-4">
                                            <span></span>
                                            Accessories
                                            <small>(578)</small>
                                        </label>
                                    </div>
    
         
                                </div>
                            </div>
                            <!-- /aside Widget -->
    
                            <!-- aside Widget -->
                            <div class="aside">
                                <h3 class="aside-title">Price</h3>
                                <div class="price-filter">
                                    <div id="price-slider"></div>
                                    <div class="input-number price-min">
                                        <input id="price-min" type="number">
                                        <span class="qty-up">+</span>
                                        <span class="qty-down">-</span>
                                    </div>
                                    <span>-</span>
                                    <div class="input-number price-max">
                                        <input id="price-max" type="number">
                                        <span class="qty-up">+</span>
                                        <span class="qty-down">-</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /aside Widget -->
    
                            <!-- aside Widget -->
                            <div class="aside">
                                <h3 class="aside-title">Brand</h3>
                                <div class="checkbox-filter">
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="brand-1">
                                        <label for="brand-1">
                                            <span></span>
                                            SAMSUNG
                                            <small>(578)</small>
                                        </label>
                                    </div>
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="brand-2">
                                        <label for="brand-2">
                                            <span></span>
                                            LG
                                            <small>(125)</small>
                                        </label>
                                    </div>
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="brand-3">
                                        <label for="brand-3">
                                            <span></span>
                                            SONY
                                            <small>(755)</small>
                                        </label>
                                    </div>
                                 
                                </div>
                            </div>
                            <!-- /aside Widget -->
    
                            <!-- aside Widget -->
                            <div class="aside">
                                <h3 class="aside-title">Top selling</h3>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
    
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
    
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- /aside Widget -->
                        </div>
                        <!-- /ASIDE -->
    
                        <!-- STORE -->
                        <div id="store" class="col-md-9">
                            <!-- store top filter -->
                            <div class="store-filter clearfix">
                                <div class="store-sort">
                                    <label>
                                        Sort By:
                                        <select class="input-select">
                                            <option value="0">Popular</option>
                                            <option value="1">Position</option>
                                        </select>
                                    </label>
    
                                    <label>
                                        Show:
                                        <select class="input-select">
                                            <option value="0">20</option>
                                            <option value="1">50</option>
                                        </select>
                                    </label>
                                </div>
                                <ul class="store-grid">
                                    <li class="active"><i class="fa fa-th"></i></li>
                                    <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                            <!-- /store top filter -->
    
                            <!-- store products -->
                          
                          
                            <div class="row">
                                <!-- product -->
                                @foreach($products as $product)
                                <div class="col-md-4 col-xs-6">
                                    <div class="product">
                                         <a href="/hz-store/product/{{$product->id}}">
                                        <div class="product-img">
                                            <img src="{{asset('storage/img/'.$product->image)}}" alt="">
                                            <div class="product-label">
                                              <!--  <span class="sale">-30%</span> -->
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                         </a>
                                        <div class="product-body">
                                            <p class="product-category">{{$product->cat->name}}</p>
                                            <h3 class="product-name"><a href="/hz-store/product/{{$product->id}}">{{$product->name}}</a></h3>
                                       
                                            <h4 class="product-price">${{$product->price}} <del class="product-old-price"></del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
     
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn" onclick="addCart({{$product->id}})"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                        </div>
                       

                                    </div>
                                </div>
                                <!-- /product -->

                             
                                @endforeach



                               
                            </div>
                            <!-- /store products -->
    
                            <!-- store bottom filter -->
                            <div class="store-filter clearfix">
                            <span class="store-qty">Showing {{ sizeof($products) }} product/s </span>
                       
                                   {!! $products->links() !!}
                              
                            </div>
                            <!-- /store bottom filter -->
                        </div>
                        <!-- /STORE -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /SECTION -->
            
                                               <script>
                                                function addCart( id){
                                                    

                                                    var token = '{{ csrf_token() }}';




$.ajax({
    url: "/hz-store/cart/addtocart" ,
    type: 'POST',
    data: {'id' : id,'_token' : token,'count' : 1},
    success: function (data) {
        $('.modal-body').html(data);
        $('#success').modal('show')
               $('.add-to-cart-btn').html('<i class="fa fa-shopping-cart"></i> add to cart')
        //$(".tab-cont").html(data);
         cartCount();
        setTimeout(function(){
        $("#success").modal('hide')
       
   
    }, 2000);
        console.log("added to cart "+id);
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        $('.modal-body').html('<div class="alert alert-danger"><strong>Danger!</strong>'+ JSON.stringify(jqXHR +'</div>'));
    }
});
                                                
                                                }
                                                
                                                $('.add-to-cart-btn').click(function(){
                                                $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>')
        
                                                })
                                                 </script>
            @endsection