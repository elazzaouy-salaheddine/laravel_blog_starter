<x-app-layout>


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Two Column</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><a href="{{ route('blog.create') }}" class="m-4">Add new post</a></li>
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
                @forelse ($blogs as $post)
                <tr>
                    <th scope="row"> {{ $post->id }}</th>
                    <td><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>  </td>

                    <td><i class="ri-checkbox-circle-line align-middle text-success"></i> {{$post->created_at}}</td>
                    <td>
                        <div class="hstack gap-3 flex-wrap">
                            <a href="{{ route('blog.edit', $post) }}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>

                            <form method="POST" action="{{ route('blog.destroy', $post) }}" class="inline-block">
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

                        {{ __('No post found') }}

                    </td>

                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>