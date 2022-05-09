<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book friends</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<div class="max-w-4xl mx-auto px-6 grid grid-cols-8 gap-12 mt-16">

    <div class="col-span-2 border-r border-slate-200 space-y-6">
        @auth
            <ul>
                <li>
                    <span class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600">
                        {{ auth()->user()->name }}
                    </span>
                </li>

                <li>
                    <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600">Feed</a>
                </li>
            </ul>


            <ul>
                <li>
                    <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600">My Books</a>
                </li>

                <li>
                    <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600"> Add a Book </a>
                </li>

                <li>
                    <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600"> Friends </a>
                </li>

            </ul>

            <ul>
                <li>
                    <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600"> Logout </a>
                </li>

            </ul>

        @endauth

        @guest

                <ul>
                    <li>
                        <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600"> Home </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600"> Login </a>
                    </li>

                    <li>
                        <a href="" class="block py-1 font-bold text-lg text-slate-600 hover:text-slate-600"> Register </a>
                    </li>

                </ul>

        @endguest

    </div>

    <div class="col-span-6">

        @isset($header)
            <h1 class="font-bold text-2xl text-slate-800">
                {{ $header }}
            </h1>
        @endisset

        {{ $slot }}

    </div>
</div>

</body>
</html>
