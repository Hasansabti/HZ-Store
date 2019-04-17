
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
       
                <li><a href="#"><i class="fa fa-map-marker"></i> KFU | CCSIT</a></li>
            </ul>
            <ul class="header-links pull-right">

                <li>
                  
                             <!-- Account Manager -->
                             <div class="dropdown">
                                <a href="" class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-user-o"></i>
                                    <span>@if(Auth::check())Welcome, {{ Auth::user()['name']}} @else Login / Register   @endif</span>
                                  
                                </a>
                     
    
                                 
                                      
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @if(!Auth::check())
                                        <a class="dropdown-item" href="/hz-store/login">Login</a>
                                        <a class="dropdown-item" href="/hz-store/register">Register</a>
                                       
                                        @else
                                        <a class="dropdown-item" href="/hz-store/account">My orders</a>
                                        <a class="dropdown-item" href="/hz-store/account">Manage Account</a>
                                        <a class="dropdown-item" href="/hz-store/logout">Logout</a>
                                        @endif
                                      </div>
                                        
                                      
                                      
                               
                            </div>

          
                      
                  
                  </li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-sm-3">
                    <div class="header-logo">
                        <a href="/hz-store" class="logo">
                            <img height="80px" src="{{asset('storage/img/logopl.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action='/hz-store/product/search'>
                       
                            <input name="q" class="input" placeholder="Search here">
                                    <button class="search-btn"><i class="fa fa-search" ></i></button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 ">
                    <div class="header-ctn">
            

                        <!-- Cart -->
                        <div class="dropdown">
                            <a href="/hz-store/cart" >
                                <i class="fa fa-shopping-cart"></i>
                                <span>Cart</span>


                                <div class="qty">0</div>

                                <script>
                               var token = '{{ csrf_token() }}';
									function cartCount(){
                                    $.ajax({
    url: "/hz-store/cart/count",
    type: 'POST',
    data: {'_token' : token},
    success: function (data) {
       
        console.log("cart: " + data);
        $('.qty').html(data);
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
       
    }
});
									}
									 cartCount();
                                    </script>
                            </a>
                   
                        </div>
                        <!-- /Cart -->

               
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->



    <nav id="navigation" class="  navbar navbar-expand-md navbar-dark">
        
           <div class="container">
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="main-nav navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/hz-store/store">Store</a>
                </li>
                @foreach($categories as $cat)
                <li class="nav-item">
                <a class="nav-link" href="/hz-store/store/{{$cat->id}}">{{$cat->name}}</a>
                </li>
                @endforeach
            
              </ul>
            </div> 
           </div>
          </nav>
  <!-- /NAVIGATION -->
</header>