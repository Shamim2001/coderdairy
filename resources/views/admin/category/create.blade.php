@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h1 class="h5">Add New Category</h1>
                <a href="{{ route('category.index') }}" class="btn-shadow">Back</a>
            </div>


            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mt-6 flex">
                                    <div class="flex-1 mr-4">
                                        <label for="name" class="cursor-pointer block text-sm mb-1">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="w-full rounded border border-gray-600 py-2" value="{{ old('name') }}">

                                        @error('name')
                                            <p class="text-red-700 text-sm">{{ $message }}</p>
                                        @enderror

                                    </div>

                                </div>
                                <div class="mt-6">
                                    <button type="submit"
                                        class="bg-blue-800 px-4 py-2 text-white rounded-md text-base uppercase">Create</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
