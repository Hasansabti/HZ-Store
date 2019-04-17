<!-- Review Form -->
                                  <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
<div class="modal-body">
                            <div id="review-form">
                                <form class="review-form" action="/hz-store/account/addreview">
                                    <input name="product" type="hidden" value="{{$product->id}}">
                                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <textarea name="review" class="input" placeholder="Your Review"></textarea>
                                    <div class="input-rating">
                                        <span>Your Rating: </span>
                                        <div class="stars">
                                            <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                            <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                            <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                            <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                            <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                        </div>
                                    </div>
                                    <button class="primary-btn submit">Submit</button>
                                </form>
                            </div>
    </div>
<script>
$('.submit').click(function(e){
    
                  var sub = $(this).html();
                    
                     $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>')
                     
                    var btn = $(this);
    
           $.ajax({
    url: "account/addreview",
    type: 'POST',
    data: $('.review-form').serialize(),
    success: function (data) {
      $('.modal-title').html('');
                $('.modal-body').html(data.message);
        
   $(btn).html(sub);
        //$(".tab-cont").html(data);
        setTimeout(function(){
      $('#success').modal('hide')
        
   
    }, 2000);
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                       $('.modal-title').html('<div class="alert alert-danger">'+JSON.stringify(jqXHR.responseJSON.message) +'</div>');
                        $(btn).html(sub);
                     
                          console.log(JSON.stringify(jqXHR.responseJSON.message));
                     
        
           
     
    }
});
 e.preventDefault();
})

</script>
                        <!-- /Review Form -->