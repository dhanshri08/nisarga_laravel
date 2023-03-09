@extends('front/layout')
@section('page_title','Contact Page')
@section('container')

<div class="container tab-content">
    <div class="row" style="margin-top:50px">

        <div class="col-sm-6 ">
            <h2>GET IN TOUCH</h2>
            <form>
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="name" class="form-control" id="" placeholder="Please Enter Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="mobile" class="form-control" id="mobile" placeholder="Please Enter Mobile">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="Please Enter Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="message" class="form-control" id="message" placeholder="Please Enter Message">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn aa-add-to-cart-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1860.6274651770314!2d79.09366979611303!3d21.14225067452556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0bf50233119%3A0x55a5425daaaa89d9!2sNisarga%20Ayurveda%20Chikitsa%20%7C%20Best%20Ayurvedic%20Doctor%20In%20Nagpur%20%7C%20Panchkarma%20In%20Nagpur!5e0!3m2!1sen!2sin!4v1663577432158!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
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
@endsection