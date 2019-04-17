@extends('layouts.app')

@section('content')
<div class="container">

<!-- Product main img -->
<div class="col-md-5 col-md-push-2">
        <div id="product-main-img">
            <div class="product-preview">
                <img  src="{{asset('storage/img/'.$product->image)}}" alt="">
            </div>

      
        </div>
    </div>
    <!-- /Product main img -->



    <!-- Product details -->
    <div class="col-md-5">
        <div class="product-details">
            <h2 class="product-name">{{$product->name}}</h2>
            <div>
                <div class="product-rating">
                     @for($j=0;$j<5;$j++)
                                              @if($revavg > $j)
                                            <i class="fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star-o"></i>
                                            @endif
                                    
                                             @endfor
                </div>
                <a class="review-link" href="#">{{$all}} Review(s)</a>
            </div>
            <div>
                <h3 class="product-price">${{$product->price}} </h3>
                <span class="product-available">In Stock</span>
            </div>
          <!--  <p>//$product->desc</p> -->

            <div class="product-options">
                <label>
                    Size
                    <select class="input-select">
                        <option value="0">X</option>
                    </select>
                </label>
                <label>
                    Color
                    <select class="input-select">
                        <option value="0">Red</option>
                    </select>
                </label>
            </div>

            <div class="add-to-cart">
                 <!--
                <div class="qty-label">
                   
                    Qty
                    <div class="input-number">
                        <input type="number">
                        <span class="qty-up">+</span>
                        <span class="qty-down">-</span>
                    </div>
                    
                </div>
                 -->
                <button onclick="addCart({{$product->id}})" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>

            <ul class="product-btns">
                
            </ul>

            <ul class="product-links">
                <li>Category:</li>
               
                <li><a href="/hz-store/store/{{$product->cat->id}}">{{$product->cat->name}}</a></li>
                
               
              
            </ul>

            <ul class="product-links">
                <li>Share:</li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul>

        </div>
    </div>
    <!-- /Product details -->

    <!-- Product tab -->
    <div class="col-md-12">
        <div id="product-tab">
            <!-- product tab nav -->
            <ul class="nav tab-nav">
                <li class="active"><a data-toggle="tab" href="#tab1" class="tab1" >Description</a></li>
                <li><a data-toggle="tab" href="#tab2" class=" tab2" >Details</a></li>
                <li><a data-toggle="tab" href="#tab3" class="tab3" >Reviews ({{$all}})</a></li>
            </ul>
            <!-- /product tab nav -->

            <!-- product tab content -->
            <div class="tab-content">
                <!-- tab1  -->
                <div id="tab1" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-12">
                            <p>{{$product->desc}}</p>
                        </div>
                    </div>
                </div>
                <!-- /tab1  -->

                <!-- tab2  -->
                <div id="tab2" class="tab-pane fade in">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Details</p>
                        </div>
                    </div>
                </div>
                <!-- /tab2  -->

                <!-- tab3  -->
                <div id="tab3" class="tab-pane fade in">
                    <div class="row">
                        <!-- Rating -->
                        <div class="col-md-3">
                            <div id="rating">
                                <div class="rating-avg">
                                    <span>{{round($revavg,1)}}</span>
                                    <div class="rating-stars">
                                          @for($j=0;$j<5;$j++)
                                              @if($revavg > $j)
                                            <i class="fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star-o"></i>
                                            @endif
                                    
                                             @endfor
                                    </div>
                                </div>
                                <ul class="rating">
                                
                                      @for($i=5;$i>0;$i--)
                                      
                                    <li>
                                        <div class="rating-stars">
                                              @for($j=0;$j<5;$j++)
                                              @if($i > $j)
                                            <i class="fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star-o"></i>
                                            @endif
                                    
                                             @endfor
                                        </div>
                                        <div class="rating-progress">
                                            <div style="width: {{$allrev[$i]['perc']}}%;"></div>
                                        </div>
                                        <span class="sum">{{$allrev[$i]['count']}}</span>
                                    </li>
                                   
                                     @endfor
                                    
                              
                               
                                </ul>
                            </div>
                        </div>
                        <!-- /Rating -->

                        <!-- Reviews -->
                        <div class="col-md-6">
                            <div id="reviews">
                                <ul class="reviews">
                                    
                                    
                                    @foreach($reviews as $review)
                                    <li>
                                        <div class="review-heading">
                                            <h5 class="name"> {{$review->reviewer->name}}</h5>
                                            <p class="date">{{$review->created_at}}</p>
                                            <div class="review-rating">
                                                @for($i=0;$i<5;$i++)
                                                @if($review->rate > $i)
                                                <i class="fa fa-star"></i>
                                                @else
                           
                                                <i class="fa fa-star-o empty"></i>
                                                @endif
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <p>{{$review->review}}</p>
                                        </div>
                                    </li>
                                    
                                    @endforeach
                                    
                                    
                     
                       
                                </ul>
                               
                                {{$reviews->fragment('tab3')->links()}}
                                <script>
                                    $('.pagination').attr('class','reviews-pagination');
                                    
                                    $(function(){
  var hash = window.location.hash;
  hash && $('ul.nav a[href="' + hash + '"]').tab('show');

  $('a').click(function (e) {
      var id = $(this).attr('id');
      $('.'+hash).closest('li').addClass('active');
    $(this).tab('show');
    var scrollmem = $('body').scrollTop();
    window.location.hash = this.hash;
    $('html,body').scrollTop(scrollmem);
  });
});

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
                  
                            </div>
                        </div>
                        <!-- /Reviews -->


                    </div>
                </div>
                <!-- /tab3  -->
            </div>
            <!-- /product tab content  -->
        </div>
    </div>
    <!-- /product tab -->

</div>

@endsection