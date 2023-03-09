@extends('front/layout')
@section('page_title','Testimonial Page')
@section('container')
<style>
  .testimonial_subtitle {
    color: #008000;
    font-size: 12px;
  }

  .testimonial_btn {
    background-color: #373d4b !important;
    color: #fff !important;
  }

  .testimonial_para {
    padding: 20px;
    margin: 0;
  }

  .arrow-down {
    width: 0;
    height: 0;
    border-left: 30px solid transparent;
    border-right: 30px solid transparent;
    border-top: 20px solid #fff;
    margin-left: 13px;
    margin-bottom: 5px;
  }

  /* 
  #carousel-testimonial .carousel-inner .item .active  {
		opacity: 1;
	} */
</style>

{{-- <h3><strong>Testimonial</strong></h3> --}}
<div class="container">
  <div class="row" style="display: flex; justify-content:center">
    <div class="col-sm-8">

      <div class="seprator"></div>

      <div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height: 200px;">
          <?php
      $count = 0;				
    ?>
          @foreach($testimonial as $crud)
          @if ($count == 0 )
          <div class="item active">
            <div class="row" style="padding: 20px">

              <p class="testimonial_para" style="background-color: white;">
                {{$crud->testimonial}}
              </p>
              <div class="arrow-down"></div>
              <div class="row">

                {{-- <div class="col-xs-1" style="display: flex;justify-content: start;">
                <img
                  src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png"
                  class="img-responsive" style="width: 80px;border-radius: 50%; margin-left: 25px;">
              </div> --}}
                <div class="col-xs-10">
                  <h4><strong>{{$crud->name}}</strong></h4>

                </div>
                <div class="col-xs-1"></div>
              </div>
            </div>
          </div>

          @else

          <div class="item">
            <div class="row" style="padding: 20px">

              <p class="testimonial_para" style="background-color: white;"> {{$crud->testimonial}}</p>
              <div class="arrow-down"></div>
              <div class="row">

                {{-- <div class="col-xs-1" style="display: flex;    justify-content: start;">
                <img
                  src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png"
                  class="img-responsive" style="width: 80px;border-radius: 50%; margin-left: 25px;">
              </div> --}}
                <div class="col-xs-10">
                  <h4><strong>{{$crud->name}}</strong></h4>

                  </p>
                </div>
                <div class="col-xs-1"></div>
              </div>
            </div>
          </div>

          @endif
          <?php 
            $count = $count + 1;
        ?>
          @endforeach

        </div>
      </div>
      <div class="controls testimonial_control pull-right">
        <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-testimonial"
          data-slide="prev"></a>

        <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-testimonial"
          data-slide="next"></a>
      </div>
    </div>
  </div>
</div>
<!-- / Client Brand -->
<input type="hidden" id="qty" value="1" />
<form id="frmAddToCart">
  <input type="hidden" id="size_id" name="size_id" />
  <input type="hidden" id="color_id" name="color_id" />
  <input type="hidden" id="pqty" name="pqty" />
  <input type="hidden" id="product_id" name="product_id" />
  @csrf
</form>
<script>

</script>
@endsection