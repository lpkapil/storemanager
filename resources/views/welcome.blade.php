@extends('layouts.app')

@section('title', 'Create Online Store in 5 Minutes')

@section('content')
<section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-7 text-center text-lg-left">
                            <h1 data-aos="fade-right">Create Your Online Store with MyStore</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Create your online store in 5 minutes and start selling.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="{{ route('register') }}" class="btn btn-outline-white">Create Account</a></p>
                        </div>
                        <div class="col-lg-5 iphone-wrap">
                            <img src="demo_images/home_logo.svg" alt="Image" class="phone-1" data-aos="fade-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<main id="main">

        <!-- ======= Home Section ======= -->
        <section class="section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Creating Store in Three Steps</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                            <div class="step">
                                <div class="wrap-icon icon-1">
                                    <span class="icon la la-users"></span>
                                </div>
                                <span class="number">01</span>
                                <h3 class="mb-3">Create a Seller Account</h3>
                            <p>Create a new account using your email address to become a seller for creating your online store.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="step">
                                <div class="wrap-icon icon-1">
                                    <span class="icon la la-toggle-off"></span>
                                </div>
                                <span class="number">02</span>
                                <h3 class="mb-3">Create Your Store</h3>
                                <p>Create a new store from admin dashboard and add your products and categories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                            <div class="step">
                                <div class="wrap-icon icon-1">
                                    <span class="icon la la-smile-o"></span>
                                </div>
                                <span class="number">03</span>
                                <h3 class="mb-3">Start Selling</h3>
                                <p>Share your online store URL with customers and start selling your products.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section class="section border-top border-bottom">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-4">
                        <h2 class="section-heading">Review From Our Users</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="review text-center">
                                <p class="stars">
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star muted"></span>
                                </p>
                                <h3>Excellent Software!</h3>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur
                                        maiores quos.</p>
                                </blockquote>

                                <p class="review-user">
                                    <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                                    <span class="d-block">
                    <span class="text-black">Jean Doe</span>, &mdash; Seller
                                    </span>
                                </p>

                            </div>

                            <div class="review text-center">
                                <p class="stars">
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star muted"></span>
                                </p>
                                <h3>This is easy to use!</h3>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur
                                        maiores quos.</p>
                                </blockquote>

                                <p class="review-user">
                                    <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                                    <span class="d-block">
                    <span class="text-black">Johan Smith</span>, &mdash; Customer
                                    </span>
                                </p>

                            </div>

                            <div class="review text-center">
                                <p class="stars">
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star"></span>
                                    <span class="icofont-star muted"></span>
                                </p>
                                <h3>Awesome functionality!</h3>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur
                                        maiores quos.</p>
                                </blockquote>

                                <p class="review-user">
                                    <img src="assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                                    <span class="d-block">
                    <span class="text-black">Jean Thunberg</span>, &mdash; Seller
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= CTA Section ======= -->
        <section class="section cta-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
                        <h2>Starts Creating Your Store To Sell Online</h2>
                    </div>
                    <div class="col-md-5 text-center text-md-right" data-aos="fade-left" data-aos-delay="200" data-aos-offset="-500">
                        <a href="{{ route('register') }}" class="btn">Create Account</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA Section -->

    </main>
@endsection