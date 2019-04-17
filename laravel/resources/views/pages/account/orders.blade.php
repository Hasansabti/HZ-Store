

 <div class="panel panel-primary">
        <div class="panel-heading">Orders</div>
        <div class="panel-body">
            <ul class="list-group">

@foreach($orders as $item)
<br>
<li class="order list-group-item">
@foreach($item->items as $oitem)





                <div class="row">
                        <div class="col-md-2">
                                <img height="100px" src="{{asset('storage/img/'.$oitem->prod->image)}}">
                        </div>
                <div class="col-md-5">
                 
                <h3>
                <a href="product/{{$oitem->prod->id}}">  {{$oitem->prod['name']}}  </a>
                </h3>
                <p> Ordered at {{$oitem->created_at}}</p>
                <p>QTY: {{$oitem->qty}} </p>
                        <p>Tracking number: {{$item->tracking}} </p>
                </div>
                <div class="col-md-5 float-right">
           
                <p>Item price: {{$oitem->prod['price']}}</p>
          <button name="{{$oitem->prod->id}}" class="btn btn-default feed" role="button">Leave feedback</button>
                </div>
                </div>
                
                
             
@endforeach
<div class="col-md-5 float-right">
<p> Total price: {{$oitem->prod['price']*$oitem->qty}}</p>
<p ><button name="{{$item->id}}}" href="#" class="btn btn-primary track" role="button">  <span>Track Order </span> </button>
       </p>
</div>
</li>
@endforeach
            </ul>
            <script>
                   $('.track').click(function(){

        
         $(this).append('<i> </i>');
         var icn = $(this).find('i'); 
         var tx = $(this).find('span');
         $(tx).hide();
         $(icn).addClass('fa fa-circle-o-notch fa-spin');
       var id = $(this).attr('name');
       $.ajax({
    url: "account/order",
    type: 'POST',
    data: {'id' : id,'_token' : token},
    success: function (data) {
     console.log(data)
                $('.modal-content').html(data);
        $('#success').modal('show')
        $(tx).show();
               $(icn).remove()
        //$(".tab-cont").html(data);
        setTimeout(function(){
      
        cartCount();
   
    }, 2000);
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                       $('.modal-body').html(JSON.stringify(jqXHR));
        $('#success').modal('show')
              $(tx).show();
               $(icn).remove()
     
    }
});

       
       
   });
   
   
                 $('.feed').click(function(){

        var id = $(this).attr('name');
         $(this).append('<i> </i>');
         var icn = $(this).find('i'); 
         var tx = $(this).find('span');
         $(tx).hide();
         $(icn).addClass('fa fa-circle-o-notch fa-spin');
    
       $.ajax({
    url: "account/review",
    type: 'POST',
    data: {'id' : id,'_token' : token},
    success: function (data) {
     console.log(data)
                $('.modal-content').html(data);
        $('#success').modal('show')
        $(tx).show();
               $(icn).remove()
        //$(".tab-cont").html(data);
        setTimeout(function(){
      
        cartCount();
   
    }, 2000);
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                       $('.modal-body').html(JSON.stringify(jqXHR));
        $('#success').modal('show')
              $(tx).show();
               $(icn).remove()
     
    }
});

       
       
   });
                </script>

</div>
</div>
