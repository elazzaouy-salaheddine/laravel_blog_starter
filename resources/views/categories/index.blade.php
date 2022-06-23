<x-app-layout>


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Two Column</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><a href="{{ route('categories.create') }}" class="m-4">Add new category</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="py-12 mt-4">


        <table class="table  table-striped align-middle table-nowrap mb-0">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col"> category name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr>
                    
                    <th scope="row"> {{ $category->id }}</th>
                    <td> <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></td>

                    <td> {{ $category->blogs->count() }} posts</td>
                    <td>
                        <div class="hstack gap-3 flex-wrap">
                            <a href="{{ route('categories.edit', $category) }}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>

                            <form method="POST" action="{{ route('categories.destroy', $category) }}" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success waves-effect waves-light" onclick="return confirm('Are you sure?')"><i class="ri-delete-bin-line"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <td colspan="2" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">

                        {{ __('No categorys found') }}

                    </td>

                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>