@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">

            <div class="py-32 relative bg-black bg-opacity-50 bg-blend-overlay bg-cover bg-no-repeat bg-center mb-10"
                style="background-image: url('https://picsum.photos/1024/900')">

                <div class="absolute bottom-5 left-5 flex space-x-5">
                    <div class=" w-20 h-20 bg-center bg-cover rounded-full ml-5"
                        style="background-image: url({{ Auth::user()->image }})">
                    </div>

                    <div class="">
                        <h1 class="text-white mt-5 text-lg">{{ Auth::user()->name }}</h1>
                        <h2 class="text-white">{{ Auth::user()->email }}</h2>
                    </div>

                </div>
            </div>

            <div class="p-4 mt-6 bg-cover bg-no-repeat bg-center">
                <form action="{{ route('profiles.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2 class="font-bold">Personal Information</h2>
                    <div class="flex justify-between py-10">
                        <div class="flex-1">
                            <div class="mt-6 flex justify-between items-center">
                                <label for="name" class="w-1/4 formLabel">Name</label>
                                <span class="w-10 text-center">:</span>
                                <input type="text" class="border w-8/12 p-2" name="name" id="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="mt-6 flex justify-between items-center">
                                <label for="username" class="w-1/4 formLabel">Username</label>
                                <span class="w-10 text-center">:</span>
                                <input type="text" class="border w-8/12 p-2" name="username" id="username"
                                    value="{{ Auth::user()->username }}">
                            </div>
                            <div class="mt-6 flex justify-between items-center">
                                <label for="email" class="w-1/4  formLabel">Email</label>
                                <span class="w-10 text-center">:</span>
                                <input type="text" class="border w-8/12 p-2" name="email" id="email"
                                    value="{{ Auth::user()->email }}">
                            </div>

                        </div>
                        <div class="flex-1 ml-8 flex flex-col justify-between">
                            <div class="flex mt-6 justify-between">
                                <div class="border p-5 flex flex-col">
                                    <label for="thumbnail" class="w-full mb-2 cursor-pointer">Thumbnail</label>
                                    <input type="file" name="thumbnail" id="thumbnail"
                                        class="w-full border-2 border-dashed border-teal-600 p-5 text-center rounded-md">

                                </div>
                                <div class="upload_image_preview flex w-24 mr-5"></div>


                            </div>

                            <div class="mt-5">
                                <button type="submit"
                                    class="w-full p-2 bg-teal-600 text-white font-bold hover:bg-orange-400 duration-300 transition-all">UPDATE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>

    </div>
    <!-- End General Report -->
@endsection


@section('scripts')
    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="m-5" style="width:150px">')).attr('src', event.target
                                .result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#thumbnail').on('change', function() {
                $('.upload_image_preview').html('');
                imagesPreview(this, 'div.upload_image_preview');
            });
        });
    </script>
@endsection
