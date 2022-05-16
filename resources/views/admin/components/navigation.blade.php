<!-- start navbar -->
<div
    class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    <!-- logo -->
    <div class="">
        <a href="{{ route('dashboard') }}" class="flex-none w-56 flex flex-row items-center">
            <img src="{{ asset('admin/img/logo.jpg') }}" class="w-10 flex-none">
            <strong class="capitalize ml-1 flex-1 text-red-500">{{ env('APP_NAME') }}</strong>
        </a>

        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
            <i class="fad fa-list-ul"></i>
        </button>
    </div>
    <!-- end logo -->

    <div class="">
        <div class="flex justify-center">
            <div class="mt-2 xl:w-96">
                <form action="{{ route('search.search') }}" method="get">
                    <div class="input-group relative flex items-stretch  mb-4">
                        <input type="search" name="search" placeholder="Search" aria-label="Search"
                            aria-describedby="button-addon2"
                            class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <button
                            class="btn mx-3 px-6 py-2 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-teal-600 hover:shadow-lg hover:text-white focus:bg-teal-600  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-teal-600 active:shadow-lg transition duration-300 ease-in-out flex items-center"
                            type="submit" id="button-addon2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                class="w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar"
        class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
        <!-- left -->
        <div
            class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">

        </div>
        <!-- end left -->

        <!-- right -->
        <div class="flex flex-row-reverse items-center">

            <!-- user -->
            <div class="dropdown relative md:static">

                <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="{{ Auth::user()->image }}">
                    </div>

                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">{{ Auth::user()->name }}
                        </h1>
                        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>
                </button>

                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div
                    class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

                    <!-- item -->
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="{{ route('profiles.index') }}">
                        <i class="fad fa-user-edit text-xs mr-1"></i>
                        My Profile
                    </a>
                    <!-- end item -->

                    <!-- item -->
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="#">
                        <i class="fad fa-cogs text-xs mr-1"></i>
                        Setting
                    </a>
                    <!-- end item -->

                    <hr>

                    <!-- item -->
                    <form action="{{ route('logout') }}" method="post"
                        class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out">
                        @csrf
                        <button type="submit" class="">
                            <i class="fad fa-user-times text-xs mr-1"></i>
                            log out
                        </button>
                    </form>
                    <!-- end item -->

                </div>
            </div>
            <!-- end user -->

            <!-- notifcation -->
            <div class="dropdown relative mr-5 md:static">

                <button
                    class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                    <i class="fad fa-bells"></i>
                </button>

                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div
                    class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                    <!-- top -->
                    <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                        <h1>notifications</h1>
                        <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                            <strong>5</strong>
                        </div>
                    </div>
                    <hr>
                    <!-- end top -->

                    <!-- body -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                        href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-birthday-cake text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">poll..</h1>
                                <p class="text-xs text-gray-500">text here also</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>4 min ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                        href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-user-circle text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">mohamed..</h1>
                                <p class="text-xs text-gray-500">text here also</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>78 min ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                        href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-images text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">new imag..</h1>
                                <p class="text-xs text-gray-500">text here also</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>65 min ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                        href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-alarm-exclamation text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">time is up..</h1>
                                <p class="text-xs text-gray-500">text here also</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>1 min ago</p>
                            </div>
                        </div>

                    </a>
                    <!-- end item -->


                    <!-- end body -->

                    <!-- bottom -->
                    <hr>
                    <div class="px-4 py-2 mt-2">
                        <a href="#"
                            class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                            view all
                        </a>
                    </div>
                    <!-- end bottom -->
                </div>
            </div>
            <!-- end notifcation -->

            <!-- messages -->
            <div class="dropdown relative mr-5 md:static">

                <button
                    class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                    <i class="fad fa-comments"></i>
                </button>

                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div
                    class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                    <!-- top -->
                    <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                        <h1>messages</h1>
                        <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                            <strong>3</strong>
                        </div>
                    </div>
                    <hr>
                    <!-- end top -->

                    <!-- body -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                        href="#">

                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                            <img class="w-full h-full object-cover" src="{{ asset('admin/img/user1.jpg') }}" alt="">
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">mohamed said</h1>
                                <p class="text-xs text-gray-500">yeah i know</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>4 min ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                        href="#">

                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                            <img class="w-full h-full object-cover" src="{{ asset('admin/img/user2.jpg') }}" alt="">
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">sull goldmen</h1>
                                <p class="text-xs text-gray-500">for sure</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>1 day ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                        href="#">

                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                            <img class="w-full h-full object-cover" src="{{ asset('admin/img/user3.jpg') }}" alt="">
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">mick</h1>
                                <p class="text-xs text-gray-500">is typing ....</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>31 feb</p>
                            </div>
                        </div>

                    </a>
                    <!-- end item -->


                    <!-- end body -->

                    <!-- bottom -->
                    <hr>
                    <div class="px-4 py-2 mt-2">
                        <a href="#"
                            class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                            view all
                        </a>
                    </div>
                    <!-- end bottom -->
                </div>
            </div>
            <!-- end messages -->


        </div>
        <!-- end right -->
    </div>
    <!-- end navbar content -->

</div>
<!-- end navbar -->
