@extends('front/layout')
@section('page_title','Gallery Page')
@section('container')
<div class="container my-3">
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/1.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/2.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/3.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/4.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/5.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/6.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/7.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/result/8.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/gallery/1.jpg')}}" alt="img" style="height:250px; width:100%">
                    <p class="card-services"><b>Nisarga Ayurveda products are delivered 15-16 states</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/gallery/2.jpg')}}" alt="img" style="height:250px; width:100%">
                    <p class="card-services"><b>Conduct blood check up camp at Nisarga Ayurveda Center</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/gallery/3.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video1.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Happy client By adapting Nisarga Ayurvedic Skin care & Hair Care Products in her Cosmetic Journey.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box ">
                    <iframe width="100%" height="250px; width:100%x" src="https://www.youtube.com/embed/iN3lQ2DC90c"
                        title="80% Releif from dandruff after 4 therapies & treatment plan" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <iframe width="100%" height="250px; width:100%x" src="https://www.youtube.com/embed/Rv72AWVFbwo"
                        title="valuable feedback of my patient who was suffering from Diabetes & so meny problems"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="card-services"><b>Valuable feedback for control of sugar & Obesity.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <iframe width="100%" height="250px; width:100%x" src="https://www.youtube.com/embed/Jgemm0RIEE4"
                        title="Nisarga Ayurveda brings for you Complete solution for all types of face & skin problems"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="card-services"><b> complete blood purification process by leech & Ayurvedic medication </b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box ">
                    <iframe width="100%" height="250px; width:100%x" src="https://www.youtube.com/embed/BTb5VTx9qrM"
                        title="Complete recovery of itchy scalp & dandruff by Nisarga Ayurvedic treatment plan & therapies"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="card-services"><b>Step by step procedure of anti-dandruff therapy</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video4.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Happy patient By Netratarppan therapy.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video5.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Setting of Netratarppan for 8 year old gir.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video6.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Feeling very happy by Netratarppan Therapy.</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <iframe width="100%" height="250px; width:100%x" src="https://www.youtube.com/embed/kQ1NOAe5OHY"
                        title="Nisarga Ayurvedic Pain Releif Oil for all types of body pain" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="card-services"><b>Complete process of making Pain Releif Oil</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video14.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Process of Aloe Vera Hair Oil.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video2.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>First stage of making Hair Regrowth Oil.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video3.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Process of making Hair Regrowth & Hair Nourishment Oil.</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video7.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Taking care of fine double filter product.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video8.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Last stage of Shata Dhouta Ghrita -A daily moisturizing skin Cream</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <iframe width="100%" height="250px; width:100%x" src="https://www.youtube.com/embed/P-SnT6l0dcg"
                        title="Hair Nourishment Powder  Reduce hair fall from very first use." frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="card-services"><b>Complete process of making & applying Hair care powder</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video9.mp4')}}" type="video/mp4">
                    </video>
                    <p class="card-services"><b>Nisarga Ayurvedic Beauty Products Ready to ship Amazon center.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video10.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Happy client with nisarga ayurvedic beuaty products.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video11.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Nisarga ayurvedic medicine & beauty products ready to ship Hydrabad , Yeotmal , Amarawati , Gadchiroli.</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video12.mp4')}}" type="video/mp4">
                    </video>
                    <p class="card-services"><b>Nisarga Ayurvedic Beauty Products Ready to ship Mumbai.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <video width="100%" style="height: 250px; width:100%x;" controls>
                        <source src="{{asset('storage/media/video/video13.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <p class="card-services"><b>Stock is Ready to ship amazon fulfillment center.</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/gallery/4.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/gallery/5.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box ">
                    <img src="{{asset('storage/media/gallery/6.jpg')}}" class="w-100 hover-shadow" alt="img"
                        style="height:250px; width:100%">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 ">
            <div class="box bg-white">
                <div class="img-box">
                    <img src="{{asset('storage/media/gallery/7.jpg')}}" alt="img" style="height:250px; width:100%">
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="qty" value="1" />
<form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id" />
    <input type="hidden" id="color_id" name="color_id" />
    <input type="hidden" id="pqty" name="pqty" />
    <input type="hidden" id="product_id" name="product_id" />
    @csrf
</form>
@endsection