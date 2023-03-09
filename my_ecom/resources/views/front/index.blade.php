@extends('front/layout')
@section('page_title','Home Page')
@section('container')
<div class="container">
  <div class="row p-3 shadow-lg text-center">
    <div class="col-sm-12">

      <h3 class="fw-bold">Nisarga Ayurveda Chikitsa & Panchakarma Center Nagpur </h3>
    </div>
    <div class="col-md-10  p-2">
      <div class="row">
        <div class="col-md-4 p-3 text-center">
          <p>we, at nisarga ayurveda make skin care & hair care products with a 100% natural
            process following authentic ayurvedic methods and strive to give our customers the best
            quality products at reasonable rates.
          </p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('storage/media/home/18.jpg')}}" class="pt-3"
            style="height: 260px; width:100%; margin-top: -10px; " alt="">
        </div>
        <div class="col-md-4">

          <img src="{{asset('storage/media/home/all.jpg')}}" class="pt-3" style="height:180px;  width:100%;" alt="">
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-4">
        <h3 class="FW-BOLD m-0 text-center h44">
          Founder of Nisarga Ayurveda : Vd Megha Kelwade
        </h3>

      </div>
    </div>
    <div class="col-md-2" style="padding-left:0px;">

      <img src="{{asset('storage/media/home/crop.jpg')}}" style="height:355px; width:100%;" alt="">
    </div>
  </div>
  <div class="row bg-white  text-center mt-5 ">
    <h3 class=" text-center">We Provide <span class="text-brown">Online</span> & <span class="text-brown">
        Offline</span> Consultantion By Expert Ayurveda Consultant After Prior Appoinment Only</h3>
    <div class="row text-center p-3 my-5 " style="display: flex;justify-content: center;">
      <div class="col-md-3">
        <h3 class="mx-4"><strong class="justify-content-center">Open</strong></h3>
        <p class="text-center">Monday to Saturday</p>
        <p class="text-center">Time: 10:00am to 7:00pm </p>
      </div>
      <div class="col-md-3">
        <h3><strong class="justify-content-center mx-3 p-2">On
            Sunday</strong></h3>
        <p class="text-center">Open By Appoinment Only</p>
        <p class="text-center">Time: 10:00am to 5:00pm </p>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top:50px">
    <h3 class="text-center">Our Services</h3>
    <div class="col-sm-3 ">
      <div class="card card-default bg-white">
        <div class="card-body card-6-6">
          <div class="card-left">
            <img src="{{asset('storage/media/home/phone.jpg')}}" class="img-responsive" style="height:250px" />
          </div>
          <div class="card-right">
            <a href={{url('telephonic')}}>
              <h4 class="card-services">Telephonic Consultation</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 ">


      <div class="card card-default bg-white">
        <div class="card-body card-7-5">
          <div class="card-left">
            <img src="{{asset('storage/media/home/video.jpg')}}" class="img-responsive" style="height:250px" />
          </div>
          <div class="card-right">
            <a href={{url('video')}}>
              <h4 class="card-services">Video Consultation (online)</h4>
            </a>
          </div>
        </div>
      </div>

    </div>
    <div class="col-sm-3 ">


      <div class="card card-default bg-white">
        <div class="card-body card-7-5">
          <div class="card-left">
            <img src="{{asset('storage/media/home/clinic.jpg')}}" class="img-responsive" style="height:250px" />
          </div>
          <div class="card-right">
            <a href={{url('clinic')}}>
              <h4 class="card-services">Clinic Consultation</h4>
            </a>
          </div>
        </div>
      </div>

    </div>
    <div class="col-sm-3 ">


      <div class="card card-default bg-white">
        <div class="card-body card-7-5">
          <div class="card-left">
            <img src="{{asset('storage/media/panchkarma/shirodhara.jpg')}}" class="img-responsive"
              style="height:250px" />
          </div>
          <div class="card-right">
            <a href={{url('panchakarma')}}>
              <h4 class="card-services">Panchakarma Consultation</h4>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="row" style="margin-top:50px">
    <h3 class="text-center">Our Products</h3>
    <div id="carousel-home-products" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php
          $count = 0;				
        ?>

        @foreach($users as $user)
        @if ($count == 0 )

        <div class="item active">


          <div class="col-md-8" style="padding:0 10px">
            <h3 class="text-center">{{ $user->name }}</h3>
            {{-- <p class="text-center">{{ $user->desc }}</p> --}}

            {!!$user->short_desc!!}

            {{-- {{ $user->image }} --}}
          </div>
          <div class="col-md-4" style="height:100%">
            <img src="{{asset('storage/media/'.$user->image)}}" alt="Los Angeles" style="width:100%; height:100%">

          </div>
        </div>

        @else


        <div class="item ">


          <div class="col-md-8" style="padding:0 10px">
            <h3 class="text-center">{{ $user->name }}</h3>
            {{-- <p class="text-center">{{ $user->desc }}</p> --}}

            {!!$user->short_desc!!}

            {{-- {{ $user->image }} --}}
          </div>
          <div class="col-md-4" style="height:100%">
            <img src="{{asset('storage/media/'.$user->image)}}" alt="Los Angeles" style="width:100%; height:100%">


          </div>
        </div>
        @endif
        <?php 
            $count = $count + 1;
        ?>
        @endforeach


      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#carousel-home-products" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-home-products" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>


{{-- <section id="aa-slider">
  <div class="aa-slider-area">
    <div id="sequence" class="seq">
      <div class="seq-screen">
        <ul class="seq-canvas">
          <!-- single slide item -->
          @foreach($home_banner as $list)
          <li>
            <div class="seq-model">
              <img data-seq src="{{asset('storage/media/banner/'.$list->image)}}" />
</div>
@if($list->btn_txt!='')
<div class="seq-title">
  <a data-seq target="_blank" href="{{$list->btn_link}}" class="aa-shop-now-btn aa-secondary-btn">{{$list->btn_txt}}</a>
</div>
@endif
</li>
@endforeach
</ul>
</div>
<!-- slider navigation btn -->
<fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
  <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
  <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
</fieldset>
</div>
</div>
</section>
<!-- / slider -->
<!-- Start Promo section -->
<section id="aa-promo">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-promo-area">
          <div class="row">
            <div class="col-md-12 no-padding">
              <div class="aa-promo-right">
                @foreach($home_categories as $list)
                <div class="aa-single-promo-right">
                  <div class="aa-promo-banner">
                    <img src="{{asset('storage/media/category/'.$list->category_image)}}" alt="img">
                    <div class="aa-prom-content">
                      <h4><a href="{{url('category/'.$list->category_slug)}}">{{$list->category_name}}</a></h4>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Promo section -->
<!-- Products section -->
<section id="aa-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-product-area">
            <div class="aa-product-inner">
              <!-- start prduct navigation -->
              <ul class="nav nav-tabs aa-products-tab">
                @foreach($home_categories as $list)
                <li class=""><a href="#cat{{$list->id}}" data-toggle="tab">{{$list->category_name}}</a></li>
                @endforeach
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men product category -->
                @php
                $loop_count=1;
                @endphp
                @foreach($home_categories as $list)
                @php
                $cat_class="";
                if($loop_count==1){
                $cat_class="in active";
                $loop_count++;
                }
                @endphp
                <div class="tab-pane fade {{$cat_class}}" id="cat{{$list->id}}">
                  <ul class="aa-product-catg">
                    @if(isset($home_categories_product[$list->id][0]))
                    @foreach($home_categories_product[$list->id] as $productArr)
                    <li>
                      <figure>
                        <a class="aa-product-img" href="{{url('product/'.$productArr->slug)}}"><img
                            src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>
                        <a class="aa-add-card-btn" href="javascript:void(0)"
                          onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')"><span
                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a
                              href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a></h4>
                          <span class="aa-product-price">Rs
                            {{$home_product_attr[$productArr->id][0]->price}}</span><span
                            class="aa-product-price"><del>Rs
                              {{$home_product_attr[$productArr->id][0]->mrp}}</del></span>
                        </figcaption>
                      </figure>
                    </li>
                    @endforeach
                    @else
                    <li>
                      <figure>
                        No data found
                        <figure>
                    <li>
                      @endif
                  </ul>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Products section -->
<!-- banner section -->
<section id="aa-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-banner-area">
            <a href="#"><img src="{{asset('front_assets/img/fashion-banner.jpg')}}" alt="fashion banner img"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- popular section -->
<section id="aa-popular-category">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-popular-category-area">
            <!-- start prduct navigation -->
            <ul class="nav nav-tabs aa-products-tab">
              <li class="active"><a href="#featured" data-toggle="tab">Featured</a></li>
              <li><a href="#tranding" data-toggle="tab">Tranding</a></li>
              <li><a href="#discounted" data-toggle="tab">Discounted</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start men featured category -->
              <div class="tab-pane fade in active" id="featured">
                <ul class="aa-product-catg aa-featured-slider">
                  <!-- start single product item -->


                  @if(isset($home_featured_product[$list->id][0]))
                  @foreach($home_featured_product[$list->id] as $productArr)
                  <li>
                    <figure>
                      <a class="aa-product-img" href="{{url('product/'.$productArr->slug)}}"><img
                          src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>
                      <a class="aa-add-card-btn" href="javascript:void(0)"
                        onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')"><span
                          class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a
                            href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a></h4>
                        <span class="aa-product-price">Rs
                          {{$home_featured_product_attr[$productArr->id][0]->price}}</span><span
                          class="aa-product-price"><del>Rs
                            {{$home_featured_product_attr[$productArr->id][0]->mrp}}</del></span>
                      </figcaption>
                    </figure>
                  </li>
                  @endforeach
                  @else
                  <li>
                    <figure>
                      No data found
                      <figure>
                  <li>
                    @endif
                </ul>
              </div>
              <!-- / popular product category -->

              <!-- start tranding product category -->
              <div class="tab-pane fade" id="tranding">
                <ul class="aa-product-catg aa-tranding-slider">
                  <!-- start single product item -->
                  @if(isset($home_tranding_product[$list->id][0]))
                  @foreach($home_tranding_product[$list->id] as $productArr)
                  <li>
                    <figure>
                      <a class="aa-product-img" href="{{url('product/'.$productArr->slug)}}"><img
                          src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>
                      <a class="aa-add-card-btn" href="javascript:void(0)"
                        onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')"><span
                          class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a
                            href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a></h4>
                        <span class="aa-product-price">Rs
                          {{$home_tranding_product_attr[$productArr->id][0]->price}}</span><span
                          class="aa-product-price"><del>Rs
                            {{$home_tranding_product_attr[$productArr->id][0]->mrp}}</del></span>
                      </figcaption>
                    </figure>
                  </li>
                  @endforeach
                  @else
                  <li>
                    <figure>
                      No data found
                      <figure>
                  <li>
                    @endif
                </ul>
              </div>
              <!-- / featured product category -->

              <!-- start discounted product category -->
              <div class="tab-pane fade" id="discounted">
                <ul class="aa-product-catg aa-discounted-slider">
                  <!-- start single product item -->

                  @if(isset($home_discounted_product[$list->id][0]))
                  @foreach($home_discounted_product[$list->id] as $productArr)
                  <li>
                    <figure>
                      <a class="aa-product-img" href="{{url('product/'.$productArr->slug)}}"><img
                          src="{{asset('storage/media/'.$productArr->image)}}" alt="{{$productArr->name}}"></a>
                      <a class="aa-add-card-btn" href="javascript:void(0)"
                        onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')"><span
                          class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a
                            href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a></h4>
                        <span class="aa-product-price">Rs
                          {{$home_discounted_product_attr[$productArr->id][0]->price}}</span><span
                          class="aa-product-price"><del>Rs
                            {{$home_discounted_product_attr[$productArr->id][0]->mrp}}</del></span>
                      </figcaption>
                    </figure>
                  </li>
                  @endforeach
                  @else
                  <li>
                    <figure>
                      No data found
                    </figure>
                  <li>
                    @endif
                </ul>
              </div>
              <!-- / latest product category -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / popular section -->
<!-- Support section -->
<section id="aa-support">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-support-area">
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single">
              <span class="fa fa-truck"></span>
              <h4>FREE SHIPPING</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single">
              <span class="fa fa-clock-o"></span>
              <h4>30 DAYS MONEY BACK</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single">
              <span class="fa fa-phone"></span>
              <h4>SUPPORT 24/7</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Support section -->

<!-- Client Brand -->
<section id="aa-client-brand">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-client-brand-area">
          <ul class="aa-client-brand-slider">
            @foreach($home_brand as $list)
            <li><a href="#"><img src="{{asset('storage/media/brand/'.$list->image)}}" alt="{{$list->name}}"></a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> --}}
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