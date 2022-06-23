@extends ('./frontend/layouts/layouts')


@section('content')
<div class="rn-blog-details-area">
    <div class="post-page-banner rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content text-center">
                        <div class="page-title">
                            <h1 class="theme-gradient">Best Corporate Tips You Will Read This Year.</h1>
                        </div>
                        <ul class="rn-meta-list">
                            <li>
                                <i class="feather-user"></i>
                                <a href="#">Irin Pervin</a>
                            </li>
                            <li>
                                <i class="feather-calendar"></i>
                                10 Dec 2021
                            </li>
                        </ul>
                        <div class="thumbnail alignwide mt--60"><img class="w-100 radius" src="{{ asset('images/'.$blog->image)}}" alt="Blog Images"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-content pt--60 rn-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content">

                        <p>{!! html_entity_decode($blog->body) !!}

                        <div class="category-meta">
                            <span class="text">Tags:</span>
                            <div class="tagcloud">
                                <a href="#">Corporate</a>
                                <a href="#">Agency</a>
                                <a href="#">Creative</a>
                                <a href="#">Design</a>
                                <a href="#">Minimal</a>
                                <a href="#">Company</a>
                                <a href="#">Development</a>
                                <a href="#">App Landing</a>
                                <a href="#">Startup</a>
                                <a href="#">App</a>
                                <a href="#">Business</a>
                                <a href="#">Software</a>
                                <a href="#">Landing</a>
                                <a href="#">Art</a>
                            </div>
                        </div>

                        <!-- Start Contact Form Area  -->
                        <div class="rn-comment-form pt--60">
                            <div class="inner">
                                <div class="section-title">
                                    <span class="subtitle">Have a Comment?</span>
                                    <h2 class="title">Leave a Reply</h2>
                                </div>
                                <form class="mt--40" action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="rnform-group"><input type="text" placeholder="Name"></div>
                                            <div class="rnform-group"><input type="email" placeholder="Email"></div>
                                            <div class="rnform-group"><input type="text" placeholder="Website"></div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="rnform-group"><textarea placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="blog-btn"><a class="btn-default" href="blog-details.html"><span>SEND
                                                            MESSAGE</span></a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Contact Form Area  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
