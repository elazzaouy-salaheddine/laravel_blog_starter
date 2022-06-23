@extends ('./frontend/layouts/layouts')


@section('content')


<div class="main-content">
    <div class="rn-blog-area rn-section-gap">
        <div class="container">
            <div class="row mt_dec--30">
                <div class="col-lg-12">
                    <div class="row row--15">


 


                @forelse ($blog as $post)
                        <div class="col-lg-4 col-md-6 col-12 mt--30 sal-animate" data-sal="slide-up" data-sal-duration="700">
                            <div class="rn-card box-card-style-default">
                                <div class="inner">
                                    <div class="thumbnail"><a class="image" href="blog-details.html"><img class="w-100" src="frontend/assets/images/blog-grid/blog-01.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="content">
                                        <ul class="rn-meta-list">
                                            <li><a href="#">Irin Pervin</a></li>
                                            <li class="separator">/</li>
                                            <li>{{$post->created_at}}</li>
                                        </ul>
                                        <h4 class="title"><a href="blog-details.html">{{ $post->title }}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

    <td colspan="2" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">

        {{ __('No post found') }}

    </td>

</tr>
@endforelse


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection