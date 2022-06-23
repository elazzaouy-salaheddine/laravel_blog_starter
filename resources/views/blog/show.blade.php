<x-app-layout>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">update category </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><a href="{{ route('blog.index') }}" class="m-4">posts list</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('blog.create') }}" class="m-4">Add new post</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->




    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row gx-lg-5">
                        <div class="col-xl-4 col-md-8 mx-auto">
                            <div class="product-img-slider sticky-side-div">
                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);" id="swiper-wrapper-1cae9ef9b2f94e2a" aria-live="polite">
                                        <div class="swiper-slide swiper-slide-active" style="width: 325px; margin-right: 24px;" role="group" aria-label="1 / 4">
                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                        </div>
                                  
                                     
                                     
                                    </div>
                                
                                </div>
                                <!-- end swiper thumbnail slide -->
                              
                                <!-- end swiper nav slide -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xl-8">
                            <div class="mt-xl-0 mt-5">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h4>{{$blog -> title}}</h4>
                                        <div class="hstack gap-3 flex-wrap">


                                            <div class="text-muted">Author : <span class="text-body fw-medium">Zoetic Fashion</span>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="text-muted">Published : <span class="text-body fw-medium">{{$blog -> created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div>
                                            <a href="{{ route('blog.edit', $blog) }}" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>




                                <div class="mt-4 text-muted">
                                    <h5 class="fs-13">Body :</h5>
                                    <p>{{$blog->body}}</p>
                                </div>





                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>









</x-app-layout>