@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h1 class="h5">Add New Problem</h1>
                <a href="{{ route('problem.index') }}" class="btn-shadow">Back</a>
            </div>


            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <form action="" method="POST" enctype="multipart/form-data">
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
                                    <div class="flex-1 mr-4">
                                        <label for="category" class="cursor-pointer block text-sm mb-1">Category</label>
                                        <input type="text" name="category" id="category"
                                            class="w-full rounded border border-gray-600 py-2"
                                            value="{{ old('category') }}">

                                        @error('category')
                                            <p class="text-red-700 text-sm">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>

                                <div class="mt-6 flex justify-between">
                                    <div class="flex-1 mr-4">
                                        <label for="visibility" class="cursor-pointer block text-sm mb-1">Visibility</label>
                                        <select name="visibility" id="visibility"
                                            class="w-full rounded border border-gray-600 py-2">
                                            <option value="">Select visibility</option>
                                            <option value="public">Public</option>
                                            <option value="privet">Privet</option>
                                        </select>

                                        @error('visibility')
                                            <p class="text-red-700 text-sm">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <div class="flex-1 mr-4">
                                        {{-- <label for="tag" class="cursor-pointer block text-sm mb-1">Tags</label>
                                <input type="text" name="tag" id="tag" class="w-full rounded border border-gray-600 py-2" value="{{ old('tag')}}"> --}}

                                        <div class="flex justify-center">
                                            <div>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label inline-block text-gray-800"
                                                        for="flexCheckDefault">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label inline-block text-gray-800"
                                                        for="flexCheckChecked">
                                                        Checked checkbox
                                                    </label>
                                                </div>
                                            </div>
                                        </div>F

                                        @error('tag')
                                            <p class="text-red-700 text-sm">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>

                                <div class="mt-6 flex">
                                    <div class="flex-1">
                                        <label for="description"
                                            class="cursor-pointer block text-sm mb-1">Description</label>
                                        <textarea name="description" id="description" rows="10"
                                            class="w-full rounded border border-gray-600 py-2">{{ old('description') }}</textarea>

                                        @error('description')
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
