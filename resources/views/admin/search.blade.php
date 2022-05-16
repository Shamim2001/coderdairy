@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h1>search</h1>
                <a href="{{ URL::previous() }}" class="btn-shadow">back</a>
            </div>

            <table class="table-auto w-full text-left">
                <tbody class="text-gray-600">
                    @forelse ($users as $user)
                        <tr>
                            <td class="border border-l-0 px-4 py-2"><a href="{{ route('problem.show', $user) }}"
                                    class="hover:text-teal-600">{{ $user->name }}</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="3">Search Not Found!
                            </td>
                        </tr>
                    @endforelse


                </tbody>
            </table>

        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
