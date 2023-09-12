@extends('frontend.layouts.layout')
@section('content')
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-8">
                    <h2 class="title">Blog Details</h2>
                </div>
                <div class="col-sm-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio-Area-Start -->
    <section class="blog-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="head-title">What People Says About Real Estate Properties.</h2>
                    <div class="blog-meta">
                        <div class="single-meta">
                            <div class="meta-title">Published</div>
                            <h4 class="meta-value"><a href="#">13 November, 2019</a></h4>
                        </div>
                        <div class="single-meta">
                            <div class="meta-title">Tag</div>
                            <h4 class="meta-value"><a href="#">Web Development</a></h4>
                        </div>
                        <div class="single-meta">
                            <div class="meta-title">Comments</div>
                            <h4 class="meta-value">258 Comments</h4>
                        </div>
                    </div>
                    <figure class="image-block">
                        <img src="images/blog-block-image.jpg" alt="">
                    </figure>
                    <div class="description">
                        <h2>That and normal and we've class. Explain attained.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley.</p>
                        <blockquote>Standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen
                            book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took.</blockquote>
                        <ul class="gallery">
                            <li><img src="images/gallery-3.jpg" alt="" class="img-fluid w-100"></li>
                            <li><img src="images/gallery-4.jpg" alt="" class="img-fluid w-100"></li>
                        </ul>
                        <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply
                            dummy text of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum
                            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley.</p>
                    </div>
                    <div class="single-navigation">
                        <a href="#" class="nav-link"><span class="icon"><i
                                    class="fal fa-angle-left"></i></span><span class="text">America National Parks
                                With Denver.</span></a>
                        <a href="#" class="nav-link"><span class="text">A Seaside Reset In Laguna Beach.</span><span
                                class="icon"><i class="fal fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area-End -->

    <!-- Quote-Area-Start -->
    <section class="quote-area section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="quote-box">
                        <div class="row ">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="quote-content">
                                    <h3 class="title">Your Journey Today</h3>
                                    <div class="desc">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate rem
                                            maiores, neque at officiis laudantium.</p>
                                    </div>
                                    <a href="#" class="button-orange mouse-dir">Get Started <span
                                            class="dir-part"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote-Area-End -->
@endsection
