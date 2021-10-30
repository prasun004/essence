@extends('layout.app')

@section('content')
    <header class="w-full">
        <h1 class="text-center text-gray-500 text-3xl tracking-widest "><strong><em>LATEST BLOG</em></strong></h1>
        <br>
        <main class="min-h-full">
            @foreach ($posts as $post )

            <section class="flex justify-center">
                <div
                    class="w-8/12 bg-blue-500 bg-opacity-25 backdrop-filter backdrop-blur-3xl text-gray-900 p-10  round-lg shadow-2xl">

                    <h1 class="text-center"> {{ $post->title }} </h1><br>
                    <p class="tracking-widest"> {{ strip_tags($post->content) }} </p>
                    <button class="p-2 object-right-bottom text-center hover:text-blue-900"> <em> <a href=" {{route('posts')}} "> continue reading...
                    </a></em></button>
                </div>
            </section>
            @endforeach

            <br><br>
            <h2 class="text-center text-gray-500 text-3xl tracking-widest"> <strong> <em> Other Blogs </em></strong> </h2><br>
            <br>
            <section class="flex mb-4 gap-8 justify-center ">
                @foreach ($posts1 as $post1)


                <div
                    class="w-3/12 mb-4 text-gray-900 bg-green-900  bg-opacity-25 backdrop-filter backdrop-blur-3xl h-auto border-2 border-gray-500">
                    <h1 class="text-center text-lg text-gray-600"> {{$post1->title}} </h1>
                    <br>
                     <p class="tracking-widest">{{ strip_tags($post1->content) }}</p>
                    <br>
                    <button class="p-2 object-right-bottom text-center hover:text-blue-900"> <em> <a href=" {{route('posts')}} ">continue reading...</a>
                        </em></button>
                </div>
                @endforeach
            </section>

        </main>

    </header>
    <footer class="bg-gray-500" style="" >
        <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto  lg:justify-between">
            <div class="flex flex-wrap justify-center">
                <ul class="flex items-center space-x-4">
                    <a href="">
                        <li class="text-white">Home</li>
                    </a>
                    <a href="">
                        <li class="text-white">About</li>
                    </a>
                    <a href="">
                        <li class="text-white">Contact</li>
                    </a>
                    <a href="">
                        <li class="text-white">Terms</li>
                    </a>
                </ul>
            </div>

            <div class="justify center">
                <input type="email" name="subscribe" placeholder="Enter your email">
                <button type="submit" class="text-white bg-red-600 border-4 border-red-500">Subscribe</button>
            </div>

            <div class="flex justify-center mt-4 lg:mt-0">
              <h6 class="text-lg text-white "> FOLLOW ME => </h6>
              <a>
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
@endsection

