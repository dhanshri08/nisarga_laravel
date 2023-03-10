@extends('front/layout')
@section('page_title','About Page')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('storage/media/about/1.jpg')}}" alt="logo" width="100%">
        </div>
        <div class="col-md-6">
            <h3 class="text-center">About Us</h3>
            <p>
                Founded in 2014 by Dr Megha Kelwade. NISARGA AYURVEDA provides a vast range of beauty and health care
                products that are 100% natural and processed using traditional authentic ayurvedic methods. We also
                provide
                various ayurvedic panchakarma treatments with complete consultation and guidance before and after
                treatment
                by the capable hands of Dr. Megha Kelwade .
            </p>
            <h3 class="text-center">Our Journey</h3>
            Nisarga Ayurveda was founded by Dr. Megha Kelwade, a doctor practicing
            Ayurvedic treatment methods. Few years back she had started Nisarga
            Ayurvedic treatment & Panchakarma chikitsa kendra with the aim of
            curing patients following Ayurvedic procedures. Most of the patients
            that came to her had simple problems that were only suppressed but not
            cured even after extensive use of antibiotics and allopathic medicines
            which also came with a lot of side effects and reduced their immunity.
            </p>
            <p>
                So she decided to do a thorough research on various ayurvedic
                medicines and procedures and came up with her own 100% natural
                Ayurvedic Health and Self care products , containing 0 chemicals ,
                preservatives & synthetic substances which are tailor made for every
                skin and body type. These products have been tried and tested on many
                patients who have got results and their positive feedback motivates
                us to continuously keep improving.
            </p>
            <p>
                With her team, since 2021 Nisarga Ayurveda has delivered satisfaction
                to hundreds of customers PAN India and sells its products on amazon &
                Indiamart.
            </p>
            <h3 class="text-center">
                Our Mission
            </h3>
            <ul>
                <li>Cures Patients Naturally</li>
                <li>Lives Healthy life with us</li>
            </ul>
        </div>
    </div>
</div>
@endsection