<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>

    <div class="shadow-md md:px-20 navbar bg-base-100">
        <div class="flex-1">
            <a class="text-xl btn btn-ghost">Kanye Qoutes</a>
        </div>
        <div class="flex-none">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{ route('logout') }}">
                    <button class="btn btn-square btn-ghost">

                        Logout
                    </button>

                </a>
            </form>
        </div>
    </div>
    {{ $slot }}
</body>

</html>
