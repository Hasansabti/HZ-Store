@extends('layouts.app')

@section('content')

<section>
  <div class="container gal-container">
      
        
      @foreach($images as $k => $imagecat)
     
                        <div class="row">
             <div class="col-sm-4 col-md-8">
            <h2>  {{$k}} </h2>
          
            </div>
 </div>
<div class="row">
      @foreach( $imagecat as $j => $image)
     
    <div class="col-md-6 gal-item">
               <h3> {{($j+1).'- '. explode("/", explode(".", $image)[0])[3]}} </h3>
      <div class="box">
                 <a href="{{asset($image)}}" data-lightbox="image-1" data-title="{{explode("/", explode(".", $image)[0])[3].' - '.explode("-",$k)[1]}}"><img height="200px" src="{{asset($image)}}"></a>
          


          
      </div>
    </div>
      @endforeach
      </div>



      @endforeach



      </div>
    </div>
  </div>
  
  <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>

</section>

        @endsection