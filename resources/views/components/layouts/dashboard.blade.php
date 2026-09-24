<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Whangaroa Whispers dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased font-sans flex flex-col min-h-screen">
    <nav class="bg-white shadow-sm border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        <a href="/" class="font-bold text-xl tracking-tight">App Shield</a>
        @auth
            <div class="flex items-center gap-6">
                <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-600 hover:text-red-800 transition-colors">Logout</button>
                </form>
            </div>
        @else
            <div class="flex gap-4">
                <a href="{{ route('login') }}" class="text-sm font-medium hover:text-blue-600">Login</a>
                <a href="{{ route('register') }}" class="text-sm font-medium hover:text-blue-600">Register</a>
            </div>
        @endauth
    </nav>
    <main class="flex-grow max-w-4xl mx-auto w-full p-8">
        {{ $slot }}
    </main>
</body>
</html>