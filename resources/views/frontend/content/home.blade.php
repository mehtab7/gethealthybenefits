<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basho</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta name="robots" content="noindex" />
</head>

<body class="px-3 md:px-10 lg:px-20">
    @include('frontend.includes.header')

    <main class="py-2 md:py-5 lg:py-10  ">
        <div class="block m-auto">
            <h1 class="text-2xl md:text-4xl lg:text-8xl text-center md:text-left  ">
                <span class="font-bold">Hey, we're Basho.</span>See Our thoughts , stories and ideas
            </h1>
        </div>
        <div class="py-10 md:flex gap-5 border-b border-[#ceced0] ">
            <div class="md:w-[35%] rounded-[2rem]">
                <form class="" action="#">
                    <div class="flex items-center rounded-3xl F">
                        <div class="flex w-full">
                            <input
                                class="block outline-none px-[20px] py-5 -mr-[60px] rounded-[3rem] w-full text-sm text-gray-900 bg-gray-50 placeholder:text-base md:placeholder:text-base lg:placeholder:text-2xl placeholder:text-black  "
                                placeholder="Enter your email" type="email" id="email" required="">
                            <div class="h-full sm:w-1/2  rounded-[1rem] ">
                                <button type="submit"
                                    class=" focus:outline-none active::outline-none rounded-[3rem] py-5 px-7 w-full text-sm md:text-base lg:text-2xl font-medium text-center text-white bg-[#151618]">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="md:w-[30%]">
                <p class="text-center md:text-left">Get the email newsletter and unlock access to members-only content
                    and updates</p>
            </div>
        </div>
        <div>
            <div class="flex justify-between pt-5">
                <div>
                    <p>
                        Get started with our <span class="font-bold">
                            best stories
                        </span>
                    </p>
                </div>
                <div class="hidden gap-4">
                    <div>
                        <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
                            <svg width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.775 3.225 0 12l8.775 8.775 1.498-1.407-6.421-6.267H24v-2.202H3.852l6.421-6.267-1.498-1.407Z">
                                </path>
                            </svg>

                        </button>
                    </div>
                    <div>
                        <button>
                            <svg width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.225 20.775 24 12l-8.775-8.775-1.498 1.407 6.421 6.267H0v2.202h20.148l-6.421 6.267 1.498 1.407Z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden flex-wrap justify-between py-5 border-b border[#ceced0]">

                @foreach ($blogs as $blog)
                    <div class="md:w-[30%] mb-8 ">
                        <div class="flex flex-col ">
                            <div class="relative">
                                <img class="md:h-[400px] h-[300px]  w-full rounded-2xl"
                                    src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                                <div class="absolute bottom-2 left-2">
                                    <div class="w-8 h-8 ">
                                        <img class="h-full rounded-[1rem] w-full"
                                            src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-3 w-[40%] gap-3">
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                                </div>
                            </div>
                            <div>
                                <a class="text-black font-bold text-2xl underline" href="#">
                                    {{ $blog->title }}
                                </a>
                                <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed
                                    at
                                    ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                    Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate.
                                    Duis
                                    et lorem in odio ultricies porttitor.
                                </p>
                            </div>
                        </div>

                    </div>
                @endforeach



                <div class="md:w-[30%] mb-8 ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[400px] h-[300px]  w-full rounded-2xl"
                                src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full rounded-[1rem] w-full"
                                        src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-2xl underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="md:w-[30%] mb-8 ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[400px] h-[300px]  w-full rounded-2xl"
                                src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full rounded-[1rem] w-full"
                                        src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-2xl underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="md:w-[30%] mb-8  ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[400px] h-[300px]  w-full rounded-2xl"
                                src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full rounded-[1rem] w-full"
                                        src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-2xl underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="md:w-[30%] mb-8 ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[400px] h-[300px]  w-full rounded-2xl"
                                src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full rounded-[1rem] w-full"
                                        src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-2xl underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="md:w-[30%] mb-8 ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[400px] h-[300px]  w-full rounded-2xl"
                                src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full rounded-[1rem] w-full"
                                        src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-2xl underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div>


            </div>

            <div id="thumbnail-slider" class="mb-12 lg:mb-6 nav-inset-button carousel -mx-2"
                data-flickity='{ "cellAlign": "left", "wrapAround": true, "draggable": false, "adaptiveHeight": true, "prevNextButtons": true , "imagesLoaded": true }'>
                @foreach ($blogs as $blog)
                    <div class="md:w-[30%] md:mr-10 mb-8 ">
                        <div class="flex flex-col ">
                            <div class="relative">
                                <img class="md:h-[407px] h-[300px] w-full md:w-[339px] rounded-2xl"
                                    src="{{ asset('images/blogs/' . $blog->image) }}" alt="">
                                <div class="absolute bottom-2 left-2">
                                    <div class="w-8 h-8 ">
                                        <img class="h-full  rounded-[1rem] w-full"
                                            src="{{ asset('images/blogs/' . $blog->author_image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-3 w-[40%] gap-3">
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                                </div>
                            </div>
                            <div>
                                <a class="text-black font-bold text-[29px] hover:underline"
                                    href="{{ url('blogs/' . $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                                {!! substr(strip_tags($blog->content), 0, 150) !!}
                            </div>
                        </div>

                    </div>
                @endforeach
                <!-- <div class="md:w-[30%] md:mr-10 mb-8 ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[407px] h-[300px] w-full md:w-[339px] rounded-2xl" src="{{ asset('assets/frontend/images/phto3.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-[29px] hover:underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="md:w-[30%] md:mr-10 mb-8 ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[407px] h-[300px] w-full md:w-[339px] rounded-2xl text-[29px]" src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full  rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-[29px] hover:underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="md:w-[30%] md:mr-10 mb-8 ">
                    <div class="flex flex-col ">
                        <div class="relative">
                            <img class="md:h-[407px] h-[300px] w-full md:w-[339px] rounded-2xl" src="{{ asset('assets/frontend/images/phto3.jpeg') }}" alt="">
                            <div class="absolute bottom-2 left-2">
                                <div class="w-8 h-8 ">
                                    <img class="h-full rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3 w-[40%] gap-3">
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                            </div>
                            <div>
                                <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                            </div>
                        </div>
                        <div>
                            <a class="text-black font-bold text-2xl hover:underline" href="#">
                                New technology is not good or evil in and of itself
                            </a>
                            <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                et lorem in odio ultricies porttitor.
                            </p>
                        </div>
                    </div>

                </div> -->

            </div>
            <!-- Stack of 5 images of users (What we've written lately) -->
            <div class="md:flex justify-between pt-5">
                <div class="md:w-[30%]">
                    <p class="text-5xl">
                        See what we've <br>
                        <span class="font-bold">written lately</span>
                    </p>
                </div>
                <div class="md:w-[30%] flex">
                    <div class="z-[5] -mr-5 w-[25%] ">
                        <a href="#">
                            <img class="border-4 rounded-[50%] border-white"
                                src="{{ asset('assets/frontend/images/i1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="z-[4] -mr-5 w-[25%] ">
                        <a href="#">
                            <img class="border-4 rounded-[50%] border-white"
                                src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="z-[3] -mr-5 w-[25%] ">
                        <a href="#">
                            <img class="border-4 rounded-[50%] border-white"
                                src="{{ asset('assets/frontend/images/i3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="z-[2] -mr-5 w-[25%] ">
                        <a href="#">
                            <img class="border-4 rounded-[50%] border-white"
                                src="{{ asset('assets/frontend/images/i1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="z-[2] -mr-5 w-[25%] ">
                        <a href="#">
                            <img class="border-4 rounded-[50%] border-white"
                                src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                        </a>
                    </div>

                </div>
            </div>
            <!-- Here Ends Stack of 5 images of users (What we've written lately) -->


            <div class="md:flex flex-wrap   py-5">
                @foreach ($blogs as $blog)
                    <div class="md:w-[30%] md:mr-10 mb-8 ">
                        <div class="flex flex-col ">
                            <div class="relative">
                                <img class="md:h-[407px] h-[300px] w-full md:w-[339px] rounded-2xl"
                                    src="{{ asset('images/blogs/' . $blog->image) }}" alt="">
                                <div class="absolute bottom-2 left-2">
                                    <div class="w-8 h-8 ">
                                        <img class="h-full  rounded-[1rem] w-full"
                                            src="{{ asset('images/blogs/' . $blog->author_image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-3 w-[40%] gap-3">
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                                </div>
                            </div>
                            <div>
                                <a class="text-black font-bold text-[29px] hover:underline"
                                    href="{{ url('blogs/' . $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                                {!! substr(strip_tags($blog->content), 0, 150) !!}
                            </div>
                        </div>

                    </div>
                @endforeach
                <!-- <div class="md:w-[30%] mb-8  ">
                <div class="flex flex-col ">
                    <div class="relative">
                        <img class="md:h-[407px] h-[300px]  w-[339px] rounded-2xl" src="{{ asset('assets/frontend/images/phto3.jpeg') }}" alt="">
                        <div class="absolute bottom-2 left-2">
                            <div class="w-8 h-8 ">
                                <img class="h-full rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-3 w-[40%] gap-3">
                        <div>
                            <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                        </div>
                        <div>
                            <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                        </div>
                        <div>
                            <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                        </div>
                    </div>
                    <div>
                        <a class="text-black font-bold text-[29px] hover:underline" href="#">
                            New technology is not good or evil in and of itself
                        </a>
                        <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                            ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                            Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                            et lorem in odio ultricies porttitor.
                        </p>
                    </div>
                </div>

            </div>
            <div class="md:w-[30%]  mb-8 ">
                <div class="flex flex-col ">
                    <div class="relative">
                        <img class="md:h-[407px] h-[300px]  w-[339px] text-[29px]" src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                        <div class="absolute bottom-2 left-2">
                            <div class="w-8 h-8 ">
                                <img class="h-full  rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-3 w-[40%] gap-3">
                        <div>
                            <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                        </div>
                        <div>
                            <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                        </div>
                        <div>
                            <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                        </div>
                    </div>
                    <div>
                        <a class="text-black font-bold text-[29px] hover:underline" href="#">
                            New technology is not good or evil in and of itself
                        </a>
                        <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                            ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                            Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                            et lorem in odio ultricies porttitor.
                        </p>
                    </div>
                </div>

            </div> -->
            </div>
            <div id="hidden_cont" class="hidden">
                <!-- <div class="md:flex flex-wrap justify-between py-5">
                    <div class="md:w-[30%]  mb-8 ">
                        <div class="flex flex-col ">
                            <div class="relative">
                                <img class="md:h-[407px] h-[300px]  w-[339px] rounded-2xl" src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                                <div class="absolute bottom-2 left-2">
                                    <div class="w-8 h-8 ">
                                        <img class="h-full  rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-3 w-[40%] gap-3">
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                                </div>
                            </div>
                            <div>
                                <a class="text-black font-bold text-[29px] hover:underline" href="#">
                                    New technology is not good or evil in and of itself
                                </a>
                                <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                    ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                    Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                    et lorem in odio ultricies porttitor.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="md:w-[30%] mb-8  ">
                        <div class="flex flex-col ">
                            <div class="relative">
                                <img class="md:h-[407px] h-[300px]  w-[339px] rounded-2xl" src="{{ asset('assets/frontend/images/phto3.jpeg') }}" alt="">
                                <div class="absolute bottom-2 left-2">
                                    <div class="w-8 h-8 ">
                                        <img class="h-full rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-3 w-[40%] gap-3">
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                                </div>
                            </div>
                            <div>
                                <a class="text-black font-bold text-[29px] hover:underline" href="#">
                                    New technology is not good or evil in and of itself
                                </a>
                                <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                    ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                    Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                    et lorem in odio ultricies porttitor.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="md:w-[30%]  mb-8 ">
                        <div class="flex flex-col ">
                            <div class="relative">
                                <img class="md:h-[407px] h-[300px]  w-[339px] text-[29px]" src="{{ asset('assets/frontend/images/photo6.jpeg') }}" alt="">
                                <div class="absolute bottom-2 left-2">
                                    <div class="w-8 h-8 ">
                                        <img class="h-full  rounded-[1rem] w-full" src="{{ asset('assets/frontend/images/i2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-3 w-[40%] gap-3">
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Design</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Idea</a>
                                </div>
                                <div>
                                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                                </div>
                            </div>
                            <div>
                                <a class="text-black font-bold text-[29px] hover:underline" href="#">
                                    New technology is not good or evil in and of itself
                                </a>
                                <p> Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at
                                    ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue.
                                    Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis
                                    et lorem in odio ultricies porttitor.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>   -->
            </div>
            <div class="pb-10 border-b border[#ceced0]">
                <button onclick="show()" id="btn"
                    class="  block m-auto text-white bg-black hover:bg-[#314bff]  transition font-medium rounded-[2rem] text-sm lg:text-3xl px-5 py-2.5">Load
                    More</button>
            </div>
            <div class=" mx-3 md:mx-10 lg:mx-20  py-5 md:py-10">
                <p class="font-bold">Recommended</p>
                <div>
                    <div class="md:flex flex-wrap py-5">
                        @foreach ($blogs as $blog)
                            <a href="{{ url('blogs/' . $blog->slug) }}">
                                <div class="md:w-[19%] mb-8 ">
                                    <div class="flex flex-col ">
                                        <div class="relative">
                                            <img class="w-full md:w-[221px] h-[265px] rounded-2xl"
                                                src="{{ asset('images/blogs/' . $blog->image) }}" alt="">
                                            <div class="absolute bottom-2 left-2">
                                                <div class="w-8 h-8 ">
                                                    <img class=" h-full rounded-[1rem] w-full"
                                                        src="{{ asset('images/blogs/' . $blog->author_image) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a class="text-black font-bold text-2xl hover:underline" href="#">
                                                {{ $blog->title }}
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class=" sm:text-center sm:mb-3 md:flex justify-between py-10 border-b border[#ceced0]">
                <div class="">
                    <p class="text-xl md:text-3xl lg:text-[4rem]">
                        Subscribe to
                        <span class="font-bold">new posts</span>
                    </p>
                </div>
                <div class="md:w-[35%] rounded-[2rem]">
                    <form class="" action="#">
                        <div class="flex items-center rounded-3xl F">
                            <div class="flex w-full">
                                <input
                                    class="block outline-none px-[20px] py-5 -mr-[60px] rounded-[3rem] w-full text-sm text-gray-900 bg-gray-50 placeholder:text-base md:placeholder:text-base lg:placeholder:text-2xl placeholder:text-black  "
                                    placeholder="Enter your email" type="email" id="email" required="">
                                <div class="h-full sm:w-1/2  rounded-[1rem] ">
                                    <button type="submit"
                                        class=" focus:outline-none active::outline-none rounded-[3rem] py-5 px-7 w-full text-sm md:text-base lg:text-2xl font-medium text-center text-white bg-[#151618]">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>

    @include('frontend.includes.footer')

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script>
        function show() {
            document.getElementById('hidden_cont').classList.remove('hidden');
        }
    </script>
</body>

</html>
