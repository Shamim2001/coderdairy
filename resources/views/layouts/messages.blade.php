@if (Session('success'))
        <div class="bg-green-300  py-4 text-center" id="status_massege">
            <p class="text-green-700">{{ Session('success') }}</p>
        </div>
    @endif
    @if (session('error'))
        <div class="bg-red-300 text-black-200 py-4 text-center" id="status_massege">
            <p>{{ Session('error') }}</p>
        </div>
    @endif
