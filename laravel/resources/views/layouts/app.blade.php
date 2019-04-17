<!doctype html>
<html lang="{{ app()->getLocale() }}">
 @include('inc.head')
    <body >

        @include('inc.navbar')

                @yield('content')
              
<!-- Modal -->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="successLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
            <div class="modal-body">
              ...
            </div>
     
          </div>
        </div>
      </div>
            		<!-- FOOTER -->
		<footer id="footer">
                <!-- top footer -->
                <div class="section">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-title">About Us</h3>
                                    <p>Hassan and Abdulaziz, </p>
                                    <ul class="footer-links">
                                        <li><a href="#">Software Engineering</a></li>
                                        <li><a href="#">Dr. numan qureshi</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="col-md-3 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-title">Categories</h3>
                                    <ul class="footer-links">
                                        <li><a href="{{route('store')}}">All products</a></li>
                                     @foreach($categories as $cat)
                <li>
                <a href="/hz-store/store/{{$cat->id}}">{{$cat->name}}</a>
                </li>
                @endforeach
                                      
                                    </ul>
                                </div>
                            </div>
    
                            <div class="clearfix visible-xs"></div>
    
                            <div class="col-md-3 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-title">Technical Information</h3>
                                    <ul class="footer-links">
                                            <li><a href="{{route('dig')}}">Diagram library</a></li>
                                        <li><a href="{{route('srs')}}">SRS Document</a></li>
                                        <li><a href="{{route('sds')}}">SDS Document</a></li>
                                  <li><a href="{{route('test')}}">Testing Document</a></li>
                                        <li><a href="{{route('impl')}}">Implementation Document</a></li>
                                         <li><a href="{{route('mng')}}">Project Management Chart</a></li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="col-md-3 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-title">Service</h3>
                                    <ul class="footer-links">
                                        <li><a href="{{url('account')}}">My Account</a></li>
                                        <li><a href="{{url('cart')}}">View Cart</a></li>
                                        <li><a href="{{url('account')}}">Track My Order</a></li>
                                        <li><a href="#">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /top footer -->
    
                <!-- bottom footer -->
                <div id="bottom-footer" class="section">
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                           
                                <span class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                                    <!-- All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </span>
    
    
                            </div>
                        </div>
                            <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /bottom footer -->
            </footer>
            <!-- /FOOTER -->
                <!-- jQuery Plugins -->
             
		<script src=" {{ asset('storage/js/jquery.min.js') }}"></script>
		<script src=" {{ asset('storage/js/demo.js') }}"></script>
		<script src="{{ asset('storage/js/slick.min.js') }}"></script>
		<script src="/hz-store/js/nouislider.min.js"></script>
		<script src="{{ asset('storage/js/jquery.zoom.min.js') }}"></script>
                <script src="{{ asset('storage/js/lightbox.js') }}"></script>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_v109X72Wv8Nhh1fBfmCJsa2HSTZLHqM"></script>
        <script src="{{asset('storage/js/main.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
   
    </body>
</html>
