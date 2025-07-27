<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Pixels Positions</title>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body class="font-hanken bg-black text-white max-w-7xl mx-auto">
        <div>
            <nav class="mx-auto flex w-[90%] place-items-center justify-between border-b-1 border-b-white/30 p-2">
                <div>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" />
                    </a>
                </div>
                <ul class="flex list-none gap-5">
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Salaries</a></li>
                    <li><a href="">Companies</a></li>
                </ul>
                @auth
                    <div class="flex items-center gap-3">
                        <a href="/jobs/create">Post a Job</a>
                        <form action="/logout" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-blue-600 p-2">Log Out</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <ul class="flex list-none gap-5">
                        <li><a href="/register">Sign Up</a></li>
                        <li><a href="/login">Log In</a></li>
                    </ul>
                @endguest
            </nav>

            <main class="mx-auto mt-10 max-w-5xl">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
