@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            @if (Session('success'))
                <div class="bg-green-200 text-green-700 py-2 text-center" id="status_massege">
                    <p class="text-green-700">Success</p>
                </div>
            @endif

            <div class="card-header flex justify-between items-center">
                <h1>Category</h1>
                <a href="{{ route('category.create') }}" class="btn-shadow text-xs">Add New</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">Name</th>
                        <th class="px-4 py-2 border-r">Slug</th>
                        <th class="px-4 py-2 border-r">Problem</th>
                        <th class="px-4 py-2 border-r">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($categories as $category)
                        <tr>
                            <td class="border border-l-0 px-4 py-2">{{ $category->name }}</td>
                            <td class="border border-l-0 px-4 py-2 lowercase">{{ $category->slug }}</td>
                            <td class="border border-l-0 px-4 py-2"></td>
                            <td class="border border-l-0 px-4 py-2 flex space-x-2 text-xs">
                                <a href="{{ route('category.edit', $category->id) }}" class="btn-bs-primary">Edit</a>

                                <form action="{{ route('category.destroy', $category->id) }}" method="post"
                                    onsubmit="return confirm('Do you really want to delete?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-bs-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="5">Category Not Found!
                            </td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
            <div class="p-5">
                {{ $categories->links() }}
            </div>
        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
