@extends('layout.app')


@section('content')

<section class="hero-wrap">
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url(images/feanebck.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 mt-5 text-center">
                            <span class="subheading">Taste.it Restaurant</h2></span>
                            <h1>Cooking Since</h1>
                            <span class="subheading-2">1958</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 mt-5 text-center">
                            <span class="subheading">Taste.it Restaurant</h2></span>
                            <h1>Best Quality</h1>
                            <span class="subheading-2 sub">Food</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- for about --}}
<section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/aboutUsimg.png" alt="about us">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are Feane
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="/about">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- end about --}}

{{-- events --}}
<section class="ftco-section " style="background-image: url('images/image_1.jpg');">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate bg-light" >
                <span class="subheading">Events</span>
                <h2 class="mb-4">Recent Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text px-4 pt-3 pb-4">
                        
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <p class="clearfix">
                            <a href="/reservation" class="float-left read btn btn-primary">Reserve!</a>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text px-4 pt-3 pb-4">
                        <div class="meta">
                            <div><a href="#">August 3, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <p class="clearfix">
                            <a href="/reservation" class="float-left read btn btn-primary">Reserve!</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text px-4 pt-3 pb-4">
                        
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <p class="clearfix">
                            <a href="/reservation" class="float-left read btn btn-primary">Reserve!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end events --}}

{{-- offers --}}
<section class="ftco-section" style="background-image: url(images/bg_1.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate bg-light">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Offers</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap" >
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Breakfast </h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    
                 
                    <span class="flat flaticon-bread" style="left: 0;"></span>
                    <span class="flat flaticon-breakfast" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Lunch</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    {{-- <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div> --}}
                   
                    <span class="flat flaticon-pizza" style="left: 0;"></span>
                    <span class="flat flaticon-chicken" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Dinner</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/dinner-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
           
                    
                    <span class="flat flaticon-omelette" style="left: 0;"></span>
                    <span class="flat flaticon-burger" style="right: 0;"></span>
                </div>
            </div>
        </div>
    </div>

</section>
  {{-- end offers --}}

{{-- for booking --}}
<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" >
                <span>Now Booking</span>
                <h2>Private Dinners &amp; Happy Hours</h2>
                <button class="button-49" role="button" onclick="window.location.href='/reservation'">BOOK NOW!</button>
                
            </div>
        </div>
    </div>
</section>
{{-- end booking --}}


@endsection
