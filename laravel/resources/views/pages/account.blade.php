@extends('layouts.app')

@section('content')


<div class="container" >
      <div id="map"></div>
     <!--   {{$user}} -->
<div class="row ">
  
        <div class=" ">
<div class="list-group">
 
        <a href="#orders" id="acc-orders" class="list-group-item list-group-item-action active">My Orders</a>
        <a href="#settings" id="acc-settings" class="list-group-item list-group-item-action">Account settings</a>
        <a href="#address" id="accaddress" class="list-group-item list-group-item-action">Address</a>
        
      </div>
    </div>
    <div class="col-md-10">
    <div class="tab-cont">


    </div>
    </div>

    
</div>
</div>
<script>
 
$('.list-group-item').click(function(){
    $(".tab-cont").html("Loading...");
    console.log("Clicked");

    $('.list-group-item').removeClass('active');
    $(this).addClass('active');

 
});

var token = '{{ csrf_token() }}';
$('#acc-orders').click(function(){


var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

$.ajax({
    url: "account/orders",
    type: 'POST',
    data: {'id' : 1,'_token' : token},
    success: function (data) {
       
        $(".tab-cont").html(data);
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        $(".tab-cont").html(JSON.stringify(jqXHR));
    }
});





});


$('#acc-settings').click(function(){
    $.get(
    "account/settings",
    function (data) {
        $(".tab-cont").html(data);
    }
);
});

   $('#acc-orders').triggerHandler('click');
   

    </script>

@endsection