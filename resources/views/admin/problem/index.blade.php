@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header">Problems</div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">name</th>
                        <th class="px-4 py-2 border-r">visibility</th>
                        <th class="px-4 py-2 border-r">category</th>
                        <th class="px-4 py-2 border-r">Tags</th>
                        <th class="px-4 py-2 border-r">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($problems as $problem)
                        <tr>
                            <td class="border border-l-0 px-4 py-2"><a href="{{ route('problem.show', $problem) }}" class="hover:text-teal-600">{{ $problem->name }}</a></td>
                            <td class="border border-l-0 px-4 py-2">{{ $problem->visibility }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $problem->category_id }}</td>
                            <td class="border border-l-0 px-4 py-2"></td>
                            <td class="border border-l-0 px-4 py-2 flex space-x-2 text-xs">
                                <a href="#" class="btn-bs-primary">Edit</a>
                                <a href="#" class="btn-bs-success">View</a>
                                <a href="#" class="btn-bs-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="5">Problem Not Found!</td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
