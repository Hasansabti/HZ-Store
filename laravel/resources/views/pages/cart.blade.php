@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">




    </div>

    @if(sizeof($cart->cartitem) == 0)
    <p><div class="alert alert-info">
             You cart is empty. <a href="/hz-store/store"><strong>Continu Shopping!</strong> </a>
          </div> </p>
                       @else
    <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>


            <tbody>

                    @foreach($cart->cartitem as $cartitem)
                    <!-- {{$prod = $cartitem->prod}} -->


                <tr>
                    <td data-th="Product">
                        <div class="row">
                        <div class="col-sm-2 hidden-xs"><a href="{{route('product',$prod->id)}}" ><img src="{{asset('storage/img/'.$prod->image)}}" alt="..." class="img-responsive"/> </a></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{$prod['name']}}</h4>
                                <p>	</p>
                            </div>
                        </div>
                    </td>
                <td data-th="Price">${{$prod['price']}}</td>
                    <td data-th="Quantity">
                        <input name="count" type="number" min="1" class="form-control text-center" value="{{$cartitem->count}}">
    
                    </td>
                    <td data-th="Subtotal" class="text-center ">$<span class="subtotal">{{$total += $cartitem->count*$prod->price}} </span></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update" id="{{$cartitem->id}}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm delete" id="{{$cartitem->id}}"><i class="fa fa-trash-o"></i></button>								
                    </td>
                </tr>

                @endforeach
            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total {{$total}}</strong></td>
                </tr>
              
             
                <tr>
                    <td><a href="/hz-store/store" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center "><strong>Total $<span class="total">{{$total}} </span></strong></td>
                    <td><a href="/hz-store/checkout" class="btn btn-success btn-block ">Checkout <i class="fa fa-angle-right"></i></a></td>
                </tr>

                
    

            </tfoot>
        </table>
        @endif
        <script>
                $('.update').click(function(){
                    var upd = $(this).html();
                    
                     $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>')
                     
                    var btn = $(this);
                    var cnt = $(this).closest('tr').find('input[name=count]').val();
                    var id = $(this).attr('id');
 
                    console.log(id +" " +cnt);

                    $.ajax({
    url: "cart/updateitem",
    type: 'POST',
    data: {'id' : id,'count': cnt,'_token' : token},
    success: function (data) {
      
        var cartitem = data['cartitem'];

       var sb = $(btn).closest('tr').find('.subtotal').html(cartitem.count*cartitem.prod.price);
       $(btn).html(upd);
        $('.modal-body').html(data['msg']);
        $('#success').modal('show')
        //$(".tab-cont").html(data);
        setTimeout(function(){
        $("#success").modal('hide')
    }, 2000);

   

console.log(cartitem.count*cartitem.prod.price);

    getTotal()

    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        $('.modal-body').html(JSON.stringify(jqXHR));
        $('#success').modal('show')
    }
});


    })

      $('.delete').click(function(){
          var del = $(this).html();
            var tr = $(this).closest('tr');
                del_id = $(this).attr('id');
                var btn = this;
                 $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>')

            $.ajax({
                url: "cart/deleteitem",
                type: 'POST',
    data: {'id' : del_id,'_token' : token},
                cache: false,
                success:function(result){
 cartCount();
        $('.modal-body').html(result);
        $('#success').modal('show')
        //$(".tab-cont").html(data);
        $(btn).html(del);
            tr.fadeOut(1000, function(){
                        $(this).remove();
                    });
        setTimeout(function(){
        $("#success").modal('hide')
    
    }, 2000);
    getTotal()

               
                },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        $('.modal-body').html(JSON.stringify(jqXHR));
        $('#success').modal('show')
    }
            });
        });

        function getTotal(){
    
           



                $.ajax({
                url: "cart/total",
                type: 'POST',
    data: {'_token' : token},
                cache: false,
                success:function(result){

         cartCount();
     
      
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
                
                            </script>

</div>
</div>

@endsection