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


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('blog.store') }}">

                        @csrf
                        <div>

                            <x-jet-label for="title" value="{{ __('title') }}" />

                            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />

                        </div>
                        <div>

                            <x-jet-label for="body" value="{{ __('body') }}" />

                            <x-jet-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required autofocus autocomplete="body" />

                        </div>

                        <div class="flex mt-4">

                            <button type="submit" class="btn btn-success waves-effect waves-light">{{ __('Save post') }}</button>

                        </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>