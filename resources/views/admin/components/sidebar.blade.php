 <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Homes</p>

      <!-- link -->
      <a href="{{ route('problem.index') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('problem.*') ? 'text-teal-600' : '' }}">
        <i class="fad fa-user-plus text-xs mr-2"></i>
        Problems
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="{{ route('solution.index') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('solution.*') ? 'text-teal-600' : '' }}">
          <i class="fad fa-bug text-xs mr-2"></i>
        Solution
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="{{ route('activity.index') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('activity.*') ? 'text-teal-600' : '' }}">
          <i class="fad fa-edit text-xs mr-2"></i>
        Activity
      </a>
      <!-- end link -->


      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Apps</p>

      <!-- link -->
      <a href="{{ route('category.index') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('category.*') ? 'text-teal-600' : '' }}">
          <i class="fad fa-tag text-xs mr-2"></i>
        Category
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="{{ route('tag.index') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('tag.*') ? 'text-teal-600' : '' }}">
          <i class="fad fa-tags text-xs mr-2"></i>
        Tags
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('media.*') ? 'text-teal-600' : '' }}">
          <i class="fad fa-image text-xs mr-2"></i>
        Media
      </a>
      <!-- end link -->
      <!-- link -->
      <a href="{{ route('frontend.index') }}" class="mb-3 bg-teal-600 px-2 py-1 text-white capitalize font-medium text-sm hover:text-black transition ease-in-out duration-500 {{ request()->routeIs('media.*') ? 'text-teal-600' : '' }}">
        Go To
      </a>
      <!-- end link -->


    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->
