@section('container')
<div class="container">
    <div class="row">
        <h2>@yield('page_title')</h2>
        <form class="myform" method="post">
            <h2 class="text-center">Book Your Appointment</h2>
            <br>
            <div class="row my-3">
                <input type="hidden" class="form-control" id="name" name="@yield('page_title')">
                <div class=" col-md-6">
                    <label class="mx-1" for="name">Name</label>
                    <input type="text" class="form-control " name="name" id="validationServer01"
                        placeholder="Enter a Name" required>
                </div>
                <div class=" col-md-6">
                    <label class="mx-1" for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="Email">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <label class="mx-1" for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
            </div>
            <div class="row my-3">
                <div class="  col-md-6">
                    <label class="mx-1" for="Number">Number</label>
                    <input type="text" class="form-control" id="Number" name="number" placeholder="Number">
                </div>
                <div class=" col-md-6">
                    <label class="mx-1" for="treatment">Treatment</label>
                    <select class="form-control" name="treatment" id="treatment">
                        <optgroup label="AYURVEDIC TREATEMENT">
                            <option value="Ayurvedic treatment for Hairfall & Hair loss">Ayurvedic treatment for
                                Hairfall & Hair loss</option>
                            <option value="Ayurvedic treatment for Acne & Skin infection">Ayurvedic treatment for Acne &
                                Skin infection</option>
                            <option value="Prakruti Prasikshan">Prakruti Prasikshan</option>
                            <option value="Nadi Prasikshan">Nadi Prasikshan</option>
                            <option value="Ayurvedic Consultation for Hyperacidity">Ayurvedic Consultation for
                                Hyperacidity</option>
                            <option value="Ayurvedic Consultation & management for Diabetes">Ayurvedic Consultation &
                                management for Diabetes</option>
                            <option value="Ayurvedic Consultation for Life style disorder"> Ayurvedic Consultation for
                                Life style disorder </option>
                            <option value="Ayurvedic Consultation & Treatment plan for Cholesterol">Ayurvedic
                                Consultation & Treatment plan for Cholesterol</option>
                            <option value="Ayurvedic Consultation for Indigesion, Constipation">Ayurvedic Consultation
                                for Indigesion, Constipation</option>
                            <option value="Ayurvedic Consultation & management for Thyroid">Ayurvedic Consultation &
                                management for Thyroid</option>
                            <option value="Ayurvedic Consultation & management for Weight loss & Weight gain">Ayurvedic
                                Consultation & management for Weight loss & Weight gain</option>
                            <option value="Ayurvedic Consultation & management for Spine management">Ayurvedic
                                Consultation & management for Spine management</option>
                            <option value="Ayurvedic treatment & management for Renal problem">Ayurvedic treatment &
                                management for Renal problem</option>
                            <option value="Complete solution for hair problem">Complete solution for hair problem
                            </option>
                            <option value="Ayurvedic treatment & management for Gynac problem">Ayurvedic treatment &
                                management for Gynac problem</option>
                            <option value="Ayurvedic treatment & management for Children">Ayurvedic treatment &
                                management for Children</option>
                        </optgroup>
                        <optgroup label="PANCHKARMA THERAPIES">
                            <option value="Pada-abhyanga">Pada-abhyanga</option>
                            <option value="Manyabasti">Manyabasti</option>
                            <option value="Janubasti">Janubasti</option>
                            <option value="Katibasti">Katibasti</option>
                            <option value="Herbal Steam">Herbal Steam</option>
                            <option value="Whole Body Massage">Whole Body Massage</option>
                            <option value="medicated Enema">medicated Enema</option>
                            <option value="Shirodhara">Shirodhara</option>
                            <option value="Nasya">Nasya</option>
                            <option value="Netratrapan">Netratrapan</option>
                            <option value="Leeach Therapy">Leeach Therapy</option>
                            <option value="Patra pinda swed">Patra pinda swed</option>
                        </optgroup>
                        <optgroup label="BEAUTY TREATEMENT">
                            <option value="Ayurvedic facial">Ayurvedic facial</option>
                            <option value="Ayurvedic Hair Spa">Ayurvedic Hair Spa</option>
                            <option value="Pada-abhangya">Pada-abhangya</option>
                        </optgroup>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="row my-3">


                <div class=" col-md-6">
                    <label class="mx-1" for="state">State</label>
                    <input type="state" class="form-control" name="state" id="state" placeholder="State Name">
                </div>




                <div class=" col-md-6">
                    <label class="mx-1" for="city">City</label>
                    <input type="city" class="form-control" name="city" id="city" placeholder="City Name">
                </div>


            </div>

            <div class=" col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="mx-1" class="form-check-label" for="gridCheck">
                        I Agree to terms and conditions
                    </label>
                </div>
            </div>
            <input type="submit" name="submit" class="btn aa-add-to-cart-btn" value="Submit" />

    </div>
</div>
@endsection