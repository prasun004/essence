<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>myBlog</title>
</head>

<body class="bg-indigo-100">
    <nav class="p10 leading-10 bg-gray-500 flex justify-between mb-10">
    <ul class="flex items-center">
        <li>
            <a href=" {{route('home')}} " class="p-3 text-indigo-100 hover:bg-blue-500">Home</a>
        </li>
        <li>
            <a href=" {{route('posts')}} " class="p-3 text-indigo-100 hover:bg-blue-500">myBlogs</a>
        </li>
        <li>
            <a href="" id="about" class="p-3 text-indigo-100 hover:bg-blue-500">About-Me</a>
        </li>
    </ul>
    <ul class="flex items-center">
        <li>
            <a href=" {{route('register')}} " class="p-3 text-indigo-100 hover:bg-blue-500">Sign-UP</a>
        </li>
        <li>

           <button>
                <a href=" {{ route('register') }} " class="p-3 text-indigo-100 hover:bg-blue-500"> FOLLOW </a> </button>
        </li>
    </ul>
</nav>

    @yield('content')
</body>
</html>
