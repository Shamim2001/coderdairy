@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h1>Solution</h1>
                <a href="{{ route('solution.create') }}" class="btn-shadow">Add New</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">Solution For</th>
                        <th class="px-4 py-2 border-r">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($solutions as $solution)
                        <tr>
                            <td class="border border-l-0 px-4 py-2"><a href="{{ route('solution.show', $solution) }}"
                                    class="hover:text-teal-600">{{ optional($solution->problem)->name }}</a></td>

                            <td class="border border-l-0 px-4 py-2 flex space-x-2 text-xs">
                                <a href="{{ route('solution.edit', $solution) }}" class="btn-bs-primary">Edit</a>

                                <form action="{{ route('solution.destroy', $solution) }}" method="post"
                                    onsubmit="return confirm('Do you really want to delete?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-bs-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="3">Solution Not Found!
                            </td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
            <div class="p-5">
                {{ $solutions->links() }}
            </div>
        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
