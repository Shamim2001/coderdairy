@extends('layouts.dashboard')

@section('content')
    <!-- Sales Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Problems Overview</h1>

            <div class="flex flex-row justify-center items-center">

                <a href="">
                    <i class="fad fa-chevron-double-down mr-6"></i>
                </a>

                <a href="">
                    <i class="fad fa-ellipsis-v"></i>
                </a>

            </div>

        </div>
        <!-- end header -->

        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

            <div class="p-8">
                <h1 class="h2">Problem Name</h1>
                <h2 class="font-medium mb-10">{{ $problem->name }}</h2>

                <p class="text-black font-medium">{{ $problem->description }}</p>
                <p class="text-black font-medium">{{ $problem->category->name }}</p>


                <a href="#" class="btn-shadow mt-6">view details</a>

            </div>

            <div class="">
                <img src="https://picsum.photos/500" alt="">
            </div>

        </div>
        <!-- end body -->

    </div>
    <!-- end Sales Overview -->
    <div class="grid grid-cols-5 gap-6 xl:grid-cols-2">
        <!-- card -->
        <div class="card mt-6">
            <div class="card-body flex items-center">

                <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                    <i class="fad fa-wallet"></i>
                </div>

                <div class="flex flex-col">
                    <h1 class="font-semibold"><span class="num-2"></span> Tags</h1>
                    <p class="text-xs"><span class="num-2"></span> Search</p>
                </div>

            </div>
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="card mt-6">
            <div class="card-body flex items-center">

                <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                    <i class="fad fa-wallet"></i>
                </div>

                <div class="flex flex-col">
                    <h1 class="font-semibold"></span> Category</h1>
                    <p class="text-xs"><span class="num-2"></span> {{ $problem->category->name }}</p>
                </div>

            </div>
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="card mt-6">
            <div class="card-body flex items-center">

                <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                    <i class="fad fa-wallet"></i>
                </div>

                <div class="flex flex-col">
                    <h1 class="font-semibold"><span class="num-2"></span> Tags</h1>
                    <p class="text-xs"><span class="num-2"></span> Search</p>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
@endsection
