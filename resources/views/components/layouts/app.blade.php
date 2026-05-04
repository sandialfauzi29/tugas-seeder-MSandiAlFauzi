<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white">

    <div class="p-5 border-b flex justify-between">
        <a href="{{ route('dashboard') }}">Dashboard</a>

        <!-- Logout sederhana -->
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="text-red-500">Logout</button>
        </form>
    </div>

    <div class="p-5">
        {{ $slot }}
    </div>

</body>
</html>