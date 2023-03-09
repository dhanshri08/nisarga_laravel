@extends('front/layout')
@section('page_title','Products Page')
@section('container')

<div class="container">
    <div class="row" style="margin-top:50px">
        <section id="aa-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="aa-product-area">
                                <div class="aa-product-inner">
                                    <!-- start prduct navigation -->
                                    <ul class="nav nav-tabs aa-products-tab">
                                        <li class="all-ul"><a href="" id="all" data-toggle="tab">ALL</a></li>
                                        @foreach($home_categories as $list)
                                        <li class="sub-ul"><a href="#cat{{$list->id}}"
                                                data-toggle="tab">{{$list->category_name}}</a></li>
                                        @endforeach
                                    </ul>


                                    <div class="tab-content allcat">

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

                                        @if(isset($home_categories_product[$list->id][0]))
                                        @foreach($home_categories_product[$list->id] as $productArr)
                                        <li class="aa-product-catg tab-pane fade {{$cat_class}}" id="cat{{$list->id}}">
                                            <figure>
                                                <a class="aa-product-img"
                                                    href="{{url('product/'.$productArr->slug)}}"><img
                                                        src="{{asset('storage/media/'.$productArr->folder_name.'/1.jpg')}}"
                                                        height="230px" width="200px" alt="{{$productArr->name}}"></a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a
                                                            href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a>
                                                    </h4>
                                                    <span class="aa-product-price">Rs
                                                        {{$productArr->price}}</span><span
                                                        class="aa-product-price"><del>Rs
                                                            {{$productArr->mrp}}</del></span>
                                                    <br />
                                                    <br />
                                                    {{-- <br/> --}}

                                                </figcaption>

                                            </figure>
                                            <a class="aa-add-card-btn" href="javascript:void(0)"
                                                onclick="home_add_to_cart('{{$productArr->id}}')"><span
                                                    class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption class="aa-add-to-cart-btn" style="width:100%">
                                                <a class="btn text-white">Chat On Whatsapp</a>
                                            </figcaption>
                                        </li>

                                        @endforeach
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    $(document).ready(function(){
      $(".tab-pane").addClass("in active");
      $(".all-ul").addClass(" active");
      $("#all").click(function(){
    
        $(".tab-pane").addClass("in active");
        $(".allcat>li").addClass(" active");
      });
    
    });

    
</script>
<!-- / Client Brand -->
<input type="hidden" id="qty" value="1" />
<form id="frmAddToCart">
    {{-- <input type="hidden" id="size_id" name="size_id" />
    <input type="hidden" id="color_id" name="color_id" /> --}}
    <input type="hidden" id="pqty" name="pqty" />
    <input type="hidden" id="product_id" name="product_id" />
    @csrf
</form>

@endsection