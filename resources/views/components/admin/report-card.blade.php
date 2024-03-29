 @props(['data', 'text'])


 <!-- card -->
    <div class="report-card">
        <div class="card bg-teal-600 ">
            <div class="card-body flex flex-col text-center ">
                <div class="mt-8">
                    <h1 class="h3 text-black ">{{ count($data) }}</h1>
                    <p class="text-white">{{ $text }}</p>
                </div>
                <!-- end bottom -->

            </div>
        </div>
        <div class="footer border-red-500 p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
    </div>
    <!-- end card -->
