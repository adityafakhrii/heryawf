@extends('layouts.master')
<title>Catalogue - PT. Herya Wood Furniture</title>

@section('content')
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Catalogue</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <div id="fh5co-product">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading">
                    <span>Our List</span>
                    <h2>Products</h2>
                    <p>We have a wide range of products that are divided into 6 categories namely beds, chairs, stools, cabinets, benches, and, tables.</p>
                </div>
            </div>
            <div class="row">
            @foreach($katalog as $k)
                <div class="col-md-4 text-center animate-box">
                    <div class="product">
                        <div class="product-grid" style='background-image:url({{asset("$k->img")}});'>
                            <div class="inner">
                                <p>
                                    <a href='https://wa.link/lwv3hs' class="icon"><i class="fa fa-whatsapp"> order</i></a>
                                    <a href='{{url("catalogue/detail/$k->id")}}' class="icon"><i class="fa fa-eye"> view</i> </a>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href='{{url("catalogue/detail/$k->id")}}'>{{$k->nama_katalog}}</a></h3>
                            {{-- <span class="price">${{$k->harga}}</span> --}}
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

    <!--================End Projects Area =================-->
        
@endsection