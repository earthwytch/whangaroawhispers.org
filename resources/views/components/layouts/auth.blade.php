<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Secure Authentication' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased font-sans min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md">
        <!-- Logo / App Name -->
        <div class="text-center mb-8">
            <a href="/" class="text-3xl font-bold tracking-tight text-gray-900">App Shield</a>
        </div>

        <!-- Component Slot -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
            {{ $slot }}
        </div>
    </div>
</body>
</html>