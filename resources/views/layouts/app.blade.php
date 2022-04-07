<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}

            <div class="text-center">
                <p>
                    {{ Auth::user()->name }}
                </p>
                <p>
                    {{ Auth::user()->prenom }}
                </p>
                <p>
                    {{ Auth::user()->age }}
                </p>
                <p>
                    {{ Auth::user()->email }}
                </p>
                <p>
                    {{ Auth::user()->password }}
                </p>

            </div>
            <table class="">
                <thead>
                    <tr>
                        <th class="text-lime-500">#</th>
                        <th class="text-lime-500">Nom</th>
                        <th class="text-lime-500">Prénom</th>
                        <th class="text-lime-500">age</th>
                        <th class="text-lime-500">email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ Auth::user()->id }} </th>
                        <td> {{ Auth::user()->name }} </td>
                        <td> {{ Auth::user()->prenom }} </td>
                        <td> {{ Auth::user()->age }} </td>
                        <td> {{ Auth::user()->ageemail }} </td>
                    </tr>

                </tbody>
            </table>

            @yield('content')
        </main>
    </div>
</body>

</html>
