@extends('layouts.master')
<title>Cart - PT. Herya Wood Furniture</title>
@section('content')        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
              <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
          <div class="banner_content text-center">
            <h2>Cart</h2>
          </div>
        </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
         <!--================Cart Area =================-->
          <section class="cart_area section_padding">
            <div class="container">
              <div class="cart_inner">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="media">
                            <div class="d-flex">
                              <img src="{{asset('img/instagram/image-01.jpg')}}" alt="" />
                            </div>
                            <div class="media-body">
                              <p>Minimalistic shop for multipurpose use</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h5>$360.00</h5>
                        </td>
                        <td>
                          <div class="product_count">
                            <input type="number" type="text" value="1" min="0" max="10" />
                          </div>
                        </td>
                        <td>
                          <h5>$720.00</h5>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Sub Total</td>
                        <td>$720.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="/catalogue">Continue Shopping</a>
                    <a class="btn_1 checkout_btn_1" href="https://api.whatsapp.com/send?phone=6281328236543&text=Hello%20With%20PT.%20Herya%20Furniture,%20I%20Want%20to%20Order%20as%20Follows%20:%20">Proceed to checkout</a>
                  </div>
                </div>
              </div>  
          </section>
          <!--================End Cart Area =================-->
@endsection