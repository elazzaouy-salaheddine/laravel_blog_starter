<x-app-layout>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">update category </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><a href="{{ route('categories.index') }}" class="m-4">categories list</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('categories.create') }}" class="m-4">Add new category</a></li>
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



            <form method="POST" action="{{ route('categories.store') }}">

                @csrf
                <div>

                    <x-jet-label for="name" value="{{ __('Name') }}" />

                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                </div>

                <div class="flex mt-4">
                    
                 <button type="submit" class="btn btn-success waves-effect waves-light">{{ __('Save category') }}</button>

                </div>

        </div>

    </div>

</div>

</div>

</x-app-layout>
