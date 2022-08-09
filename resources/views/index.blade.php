@extends('layouts.master')

@section('content')
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="banner_content">
                                <h2>Precise concept design<br/>for stylish living</h2>
                                <p>PT. Herya Wood Furniture is a company engaged in the field of furniture and interior, which was founded in 2005.</p>
                                <a class="banner_btn" href="#">Get Started</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="home_right_box">
                                <div class="home_item">
                                    <a href="/catalogue"><img width="40%" src="{{asset('img/Ikon/Bed.png')}}" alt=""></a>
                                </div> 
                                <div class="home_item">
                                    <a href="/catalogue"><img width="40%" src="{{asset('img/Ikon/Bench.png')}}" alt=""></a>
                                </div>
                                <div class="home_item">
                                    <a href="/catalogue"><img width="40%" src="{{asset('img/Ikon/Chair.png')}}" alt=""></a>
                                </div>
                                <div class="home_item">
                                    <a href="/catalogue"><img width="40%" src="{{asset('img/Ikon/Stool.png')}}" alt=""></a>
                                </div>
                                <div class="home_item">
                                    <a href="/catalogue"><img width="40%" src="{{asset('img/Ikon/Cabinet.png')}}" alt=""></a>
                                </div>
                                <div class="home_item">
                                    <a href="/catalogue"><img width="40%" src="{{asset('img/Ikon/Table.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Furniture Area =================-->
        <section class="furniture_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Most Popular Furnitures</h2>
                </div>
                <div class="furniture_inner row">
                    <div class="col-lg-4">
                        <div class="furniture_item">
                            <img class="img-fluid" src="img/furniture/Populer 1.jpg" alt="">
                            <h4>Dt Star</h4>
                            <p>200 x 100 x 76cm</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="furniture_item">
                            <img class="img-fluid" src="img/furniture/Populer 2.jpg" alt="">
                            <h4>Perugia</h4>
                            <p>100 x 30 x 63cm</p>
                            <p>120 x 30 x 70cm</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="furniture_item">
                            <img class="img-fluid" src="img/furniture/Populer 3.jpg" alt="">
                            <h4>Bnc-Cross</h4>
                            <p>50 x 26 x 49cm</p>
                        </div>
                    </div>
                    {{-- @foreach($catalogues as $catalogue)
                    <div class="furniture_inner row">
                        <div class="col-lg-4">
                            <div class="furniture_item">
                                <img class="img-fluid-new" src="{{asset($catalogue->img)}}" alt="">
                                <h4>{{$catalogue->nama_katalog}}</h4>
                                <p>{{substr($catalogue->desc,0,100)}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                </div>
            </div>
        </section>
        <!--================End Furniture Area =================-->
        
        <!--================Projects Area =================-->
        <section class="projects_area">
            <div class="row m0">
                <div class="projects_item wd_18">
                    <img src="img/projects/1.jpg" alt="">
                    <div class="hover">
                        <h4>Alex Complex for esidence</h4>
                        <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer.</p>
                    </div>
                </div>
                <div class="projects_item wd_18">
                    <img src="img/projects/2.jpg" alt="">
                    <div class="hover">
                        <h4>Herman Chair</h4>
                        <p>42 X 44 X 91cm</p><p>$50</p>
                    </div>
                </div>
                <div class="projects_item wd_44">
                    <img src="img/projects/3.jpg" alt="">
                    <div class="hover">
                        <h4>Alex Complex for esidence</h4>
                        <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer.</p>
                    </div>
                </div>
                <div class="projects_item wd_18">
                    <img src="img/projects/4.jpg" alt="">
                    <div class="hover">
                        <h4>Alex Complex for esidence</h4>
                        <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Projects Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Why Should PT. Herya Wood Furniture?</h2>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-user"></i>Expert Technicians</h4>
                            <p>Our design team coordinates with carpenters and craftsmen for perfect results and all the work in our workshop to experiment with the materials and combinations of materials we supervise and test firmly to produce quality products.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-diamond"></i>Modern Design</h4>
                            <p>We have more than 400 models of furniture made from teak cultivation, recycled teak wood, teak wood, teakblock, and other materials that can be combined according to the design.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-bubble"></i>Positif Review</h4>
                            <p>PT. Herya Wood Furniture has been able and trusted to export furniture garments to date both interior, hotel and oﬃce large and small.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-rocket"></i>High Quality</h4>
                            <p>Our workshop is integrated with high standard production supervision for quality. Starting from the selection of raw materials, production process, construction, finishing until the packaging is released on the quality that the customer wants.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-license"></i>Proffesional Workforce</h4>
                            <p>Complete products and assistance from our team of experts and you will get the right services to suit your tastes and budget. With 62 employees we have a capacity of 2-3 containers each month.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-phone"></i>Great Support</h4>
                            <p>PT. Herya Wood Furniture is supported by experienced experts in their field, also diversify indoor indoor production, working wood and art division with competitive price and timely delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Impress Area =================-->
        <section class="impress_area p_120">
            <div class="container">
                <div class="impress_inner text-center">
                    <h2>Looking for a<br>quality and affordable Furniture?</h2>
                    <a class="main_btn" href="#">Order Now!</a>
                </div>
            </div>
        </section>
        <!--================End Impress Area =================-->
        
        <!--================Our Blog Area =================-->
        <section class="our_blog_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Recent Posts from our Workshop</h2>
                </div>
                <div class="blog_inner row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="o_blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="{{$blog->img}}" alt="">
                            </div>
                            <div class="blog_text">
                                <a href="#"><h4>{{$blog->judul}}</h4></a>
                                <p>{{substr($blog->isi,0,90)}} ...</p>
                                <a class="date" href="#">{{$blog->updated_at}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================End Our Blog Area =================-->
@endsection