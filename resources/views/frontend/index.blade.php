@extends('frontend.layout.base')

@section('content')

    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider hero-overly1 slider-height d-flex align-items-center slider-bg1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption">
                                    <span>70% Sale off </span>
                                    <h1 data-animation="fadeInUp" data-delay=".4s" >Furniture  at Cost</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Suspendisse varius enim in eros elementum 
                                        tristique. Duis cursus, mi quis viverra ornare, eros 
                                    dolor interdum nulla.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                        <a href="industries.html" class="btn hero-btn">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Properties Start -->
        <section class="properties new-arrival fix">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <h2>Popular products</h2>
                            <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="properties__button text-center">
                            <!--Nav Button  -->
                            <nav>                         
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    
                                    @foreach($category as $categories)
                                    <a class="nav-item nav-link active" id="nav-Sofa-tab" data-toggle="tab" href="#nav-Sofa" role="tab" aria-controls="nav-Sofa" aria-selected="true">{{ $categories->name }}</a>
                                   @endforeach
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div class="tab-pane fade show active" id="nav-Sofa" role="tabpanel" aria-labelledby="nav-Sofa-tab">
                            <div class="row">
                                

                                @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


 
                            </div>
                        </div>
                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-Table" role="tabpanel" aria-labelledby="nav-Table-tab">
                            <div class="row">
                               

                              @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-Chair" role="tabpanel" aria-labelledby="nav-Chair-tab">
                            <div class="row">
                               @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>

                        <!-- Card FOUR -->
                        <div class="tab-pane fade" id="nav-Bed" role="tabpanel" aria-labelledby="nav-Bed-tab">
                            <div class="row">
                               @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <!-- Card FIVE -->
                        <div class="tab-pane fade" id="nav-Lightning" role="tabpanel" aria-labelledby="nav-Lightning-tab">
                            <div class="row">
                                @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Card SIX -->
                        <div class="tab-pane fade" id="nav-Decore" role="tabpanel" aria-labelledby="nav-Decore-tab">
                            <div class="row">
                                 @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Card -->
                </div>
            </div>
        </section>
        <!-- Properties End -->
        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <h2>Best Furniture<br> manufacturer</h2>
                <p>Suspendisse varius enim in eros elementum 
                    tristique. Duis cursus, mi quis viverra ornare, eros 
                dolor interdum nulla.</p>
                <p class="pera-bottom">Suspendisse varius enim in eros elementum 
                    tristique. Duis cursus, mi quis viverra ornare, eros 
                dolor interdum nulla.</p>
                <a href="#" class="btn">Discover More</a>
            </div>

        </div>
        <!-- Visit Our Tailor End -->
        <!--? New Arrival-2 Start -->
        <div class="new-arrival new-arrival2">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2>Products you may like</h2>
                            <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="product.html" class="border-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--? New Arrival End -->
        <!--? instagram-social start -->
        <div class="instagram-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="instra-tittle mb-40">
                        <div class="section-tittle">
                            <img src="assets/img/gallery/insta.png" alt="">
                            <h2>Get Inspired with Instagram</h2>
                            <P class="mb-35">Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                            <a href="product.html" class="border-btn">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-instagram">
                                <img src="assets/img//gallery/instra1.png" alt="" class="w-100">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-instagram">
                                <img src="assets/img//gallery/instra2.png" alt="" class="w-100">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-social End -->
    <!--? New Arrival-3 Start -->
    <div class="new-arrival new-arrival2">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>Top Pick</h2>
                        <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($product as $products)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img" style="width:210px;">
                                            <center>
                                            <img src="{{ asset('images/'.$products->image) }}" alt="">
                                            </center>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="{{ route('product_details',$products->id)}}">{{ $products->name }}</a></h3>
                                            <span>$ {{ $products->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn">
                 <a href="product.html" class="border-btn">Discover More</a>
             </div>
         </div>
     </div>
 </div>
 <!--? New Arrival End -->
 <!-- Popular Locations End -->
 <!--? Services Area Start -->
 <div class="categories-area section-padding40 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services2.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Secure Payment</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services3.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Money Back Guarantee</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services4.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Online Support</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? Services Area End -->
</main>


<style>

.popular-img{
    display:inline-block !important;
}


</style>

@endsection

@section('scripts')
  