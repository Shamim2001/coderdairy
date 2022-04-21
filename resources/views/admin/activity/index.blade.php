@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h1>Activities</h1>
                <a href="{{ route('activity.create') }}" class="btn-shadow text-xs">Add New</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">Message</th>
                        <th class="px-4 py-2 border-r">Model</th>
                        <th class="px-4 py-2 border-r">Timestamp</th>
                        <th class="px-4 py-2 border-r">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($activities as $activity)
                        <tr>
                            <td class="border border-l-0 px-4 py-2">{{ $activity->message }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $activity->model }}</td>
                            <td class="border border-l-0 px-4 py-2">{{ $activity->created_at->diffForHumans() }}</td>
                            <td class="border border-l-0 px-4 py-2 flex space-x-2 text-xs">
                                <a href="{{ route('activity.edit' , $activity->id) }}" class="btn-bs-primary">Edit</a>

                                <form action="{{ route('activity.destroy', $activity->id) }}" method="post" onsubmit="return confirm('Do you really want to delete?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-bs-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="5">Tags Not Found!
                            </td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
            <div class="p-5">
                {{ $activities->links() }}
            </div>
        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
