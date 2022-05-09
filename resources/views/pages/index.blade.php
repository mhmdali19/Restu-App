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



{{-- for booking --}}
<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span>Now Booking</span>
                <h2>Private Dinners &amp; Happy Hours</h2>
                <button class="button-49" role="button">BOOK NOW!</button>
            </div>
        </div>
    </div>
</section>
{{-- end booking --}}



<section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Happy Customer</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-7">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Chef</span>
                <h2 class="mb-4">Our Master Chef</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/chef-4.jpg);"></div>
                    <div class="text px-4 pt-2">
                        <h3>John Gustavo</h3>
                        <span class="position mb-2">CEO, Co Founder</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/chef-2.jpg);"></div>
                    <div class="text px-4 pt-2">
                        <h3>Michelle Fraulen</h3>
                        <span class="position mb-2">Head Chef</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/chef-3.jpg);"></div>
                    <div class="text px-4 pt-2">
                        <h3>Alfred Smith</h3>
                        <span class="position mb-2">Chef Cook</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/chef-1.jpg);"></div>
                    <div class="text px-4 pt-2">
                        <h3>Antonio Santibanez</h3>
                        <span class="position mb-2">Chef Cook</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
                <div class="img img-2 w-100 ml-md-2" style="background-image: url(images/bg_4.jpg);"></div>
            </div>
            <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
                <div class="heading-section ftco-animate mb-5">
                    <span class="subheading">This is our secrets</span>
                    <h2 class="mb-4">Perfect Ingredients</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Recent Blog</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text px-4 pt-3 pb-4">
                        <div class="meta">
                            <div><a href="#">August 3, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read btn btn-primary">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
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
                            <a href="#" class="float-left read btn btn-primary">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text px-4 pt-3 pb-4">
                        <div class="meta">
                            <div><a href="#">August 3, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read btn btn-primary">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
    <div class="container py-5">
        <div class="row py-2">
            <div class="col-md-12 text-center">
                <h2>We Make Delicious &amp; Nutritious Food</h2>
                <a href="#" class="btn btn-white btn-outline-white">Book A Table Now</a>
            </div>
        </div>
    </div>
</section>

@endsection
