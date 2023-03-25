<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$blog->meta_title}}</title>
    <meta name="description" content="{{$blog->meta_description}}">
    <meta name="keywords" content="{{$blog->meta_keywords}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="robots" content="noindex" />

</head>

<body class="px-3 md:px-10 lg:px-20">

    @include('frontend.includes.header')

    <main class="py-10">
        <div class="flex flex-col md:flex-row">
            <div class=" md:w-3/5 order-2 md:order-1">
                <div class="flex justify-center md:justify-start gap-3">
                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Lifestyle</a>
                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">People</a>
                    <a class="bg-[#efeef0] rounded-[1rem] py-1 px-3" href="#">Review</a>
                </div>
                <div class="pt-3 ">
                    <p class=" text-center md:text-start text-xl font-bold md:text-3xl lg:text-5xl">{{$blog->title}}</p>
                </div>
                <div class="pt-3">
                    <p class="text-base text-center md:text-start   md:text-lg lg:text-xl">
                        {{$blog->title_description}}
                    </p>
                </div>
                <div class="flex pt-3  items-center gap-1">
                    <div class="md:w-[60%] flex justify-center  md:justify-start">
                        <div class="z-[5] -mr-5 w-[20%] ">
                            <a href="#">
                                <img class="border-4 rounded-[50%] border-white" src="{{asset('images/blogs/' . $blog->author_image)}}" alt="">
                            </a>
                        </div>
                        <div class="z-[4] self-center  ">
                            <p><span>{{$blog->author_name}}</span>
                                <br>
                                March 16, 2022 — 4 minutes read
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="md:w-2/5 md:ml-10 order-1 md:order-1">
                <img class="h-[70vh] m-auto rounded-[1rem]" src="{{asset('images/blogs/'.$blog->image)}}" alt="">
                <p class="text-center">Photo by <b>{{$blog->author_name}}</b></p>
            </div>

        </div>
        <div class=" pt-3 w-[60%] m-auto">
            <p class="text-base  md:text-lg lg:text-xl ">
                <?= $blog->content ?>
            </p>
        </div>
        <div class="bg-[#151618] p-10 text-center ">
            <p class="text-xl text-white font-bold md:text-3xl lg:text-7xl">{{$blog->main_tag_line}}</p>
        </div>
        <div class=" py-3 w-[60%] m-auto">
            <div class="py-3">
                <p class="text-base  md:text-lg lg:text-xl ">
                    <?= $blog->content_2 ?>
                </p>
            </div>

            <p class="py-5 ">Share this post</p>
            <div class="flex md:w-2/5 rounded-[1rem]  bg-[#efeef0]">
                <div class="p-4 w-1/4">
                    <a href="#">
                        <svg width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="p-4 w-1/4">
                    <a href="#">
                        <svg width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z">
                            </path>
                        </svg> </a>
                </div>
                <div class="p-4 w-1/4">
                    <a href="#">
                        <svg width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z">
                            </path>
                        </svg> </a>
                </div>
                <div class="p-4 w-1/4">
                    <a href="#">
                        <svg width="20px" viewBox="0 0 33 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.3999996,13.4004128 L21.7999996,13.4004128 L21.7999996,19 L18.9999996,19 L18.9999996,13.4004128 L13.3999996,13.4004128 L13.3999996,10.6006192 L18.9999996,10.6006192 L18.9999996,5 L21.7999996,5 L21.7999996,10.6006192 L27.3999996,10.6006192 L27.3999996,13.4004128 Z M12,20.87 C7.101,20.87 3.13,16.898 3.13,12 C3.13,7.102 7.101,3.13 12,3.13 C12.091,3.13 12.181,3.139 12.272,3.142 C9.866,5.336 8.347,8.487 8.347,12 C8.347,15.512 9.866,18.662 12.271,20.857 C12.18,20.859 12.091,20.87 12,20.87 Z M20.347,0 C18.882,0 17.484,0.276 16.186,0.756 C14.882,0.271 13.473,0 12,0 C5.372,0 0,5.373 0,12 C0,18.628 5.372,24 12,24 C13.471,24 14.878,23.726 16.181,23.242 C17.481,23.724 18.88,24 20.347,24 C26.975,24 32.347,18.628 32.347,12 C32.347,5.373 26.975,0 20.347,0 Z">
                            </path>
                        </svg> </a>
                </div>
            </div>
        </div>
        @if(isset($oldBlog))
        <div class=" border-y border[#ceced0] py-5">
            <div class="flex justify-end">
                <div class="md:w-1/3 items-center flex gap-3">
                    <div class="text-right">
                        <p>Older Posts</p>
                        <a href="{{url('blogs/'.$oldBlog->slug)}}">
                            <h3 class="text-xl font-semibold">{{$oldBlog->title}}</h3>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img class="rounded h-[200px]" src="assets/mn1.jpeg" alt="">
                        </a>
                    </div>
                </div>
                <div>

                </div>
            </div>

        </div>
        @endif
        <div class="py-5 md:py-10">
            <p class="font-bold">Recommended</p>
            <div>
                <div class="md:flex flex-wrap px-2 py-5">
                    @foreach($blogs as $singleBlog)
                    <a href="{{url('blogs/'.$singleBlog->slug)}}">
                        <div class="md:w-[19%] mb-8 ">
                            <div class="flex flex-col ">
                                <div class="relative">
                                    <img class="w-full rounded-2xl" src="{{asset('images/blogs/'.$singleBlog->image)}}" alt="">
                                    <div class="absolute bottom-2 left-2">
                                        <div class="w-8 h-8 ">
                                            <img class="h-full rounded-[1rem] w-full" src="{{asset('images/blogs/'.$blog->author_image)}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a class="text-black font-bold text-2xl underline" href="#">
                                        {{$singleBlog->title}}
                                    </a>
                                </div>
                            </div>

                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="sm: text-center sm:mb-3 md:flex justify-between py-10 border-b border[#ceced0]">
            <div class="">
                <p class="text-xl md:text-3xl lg:text-5xl">
                    Subscribe to
                    <span class="font-bold">new posts</span>
                </p>
            </div>
            <div class="md:w-[35%] rounded-[2rem]">
                <form class="" action="#">
                    <div class="flex items-center rounded-3xl F">
                        <div class="relative w-full">
                            <input class="block outline-none p-5 rounded-[2rem] w-full text-sm text-gray-900 bg-gray-50 placeholder:text-2xl placeholder:text-black  " placeholder="Enter your email" type="email" id="email" required="">
                            <div class="md:absolute sm:w-1/2 sm:py-2 right-0 rounded-[1rem] top-[-6px]">
                                <button type="submit" class=" focus:outline-none active::outline-none rounded-[2rem] py-3 px-5 w-full text-sm md:text-2xl font-medium text-center text-white bg-[#151618]">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </main>

    @include('frontend.includes.footer')

    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>