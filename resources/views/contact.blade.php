@extends('layouts.master')
<title>Contact - PT. Herya Wood Furniture</title>
@section('content')
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>CONTACT US</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
               <!--  <div id="mapBox" class="mapBox" 
                    data-lat="-6.9212224" 
                    data-lon="106.9229958" 
                    data-zoom="13" 
                    data-info="Masjid Agung Kota Sukabumi"
                    data-mlat="-6.9212224"
                    data-mlon="106.9229958">
                </div> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.605957282693!2d110.43402330180713!3d-7.847265475830249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5130e4a244fd%3A0xc1e8d391e82ab19f!2sHerya%20WF.%20PT!5e0!3m2!1sid!2sid!4v1605786493792!5m2!1sid!2sid" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Nganyang, Sitimulyo, Piyungan, Bantul, Yogyakarta</h6>
                                <p>Indonesia</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+62 813 - 2823 - 6543</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">herya@indosat.net.id</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
@endsection