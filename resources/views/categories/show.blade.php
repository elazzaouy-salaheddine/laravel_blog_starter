<x-app-layout>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">show category : </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><a href="{{ route('categories.index') }}" class="m-4">categories list</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('categories.create') }}" class="m-4">Add new categories</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    @foreach($category->blogs as $post)
        <ul>
            <li>
                <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
            </li>
        </ul>
    @endforeach


</x-app-layout>