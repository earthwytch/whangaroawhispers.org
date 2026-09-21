<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Whangaroa Whispers' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-page-canvas text-copy-body">

    <!-- Main Content Area -->
    <main class="flex-1 w-full">
        {{ $slot }}
    </main>

    <!-- Pinned Navy Footer -->
    <x-footer outerBg="bg-brand-navy" innerClass="py-6 text-pure-white/80 text-sm">
        <div class="flex flex-col sm:flex-row justify-between gap-4">
            <div class="flex gap-8">
                <div>
                    <h4 class="font-bold text-pure-white">Contact</h4>
                    <p class="text-xs mt-1">whangaroawhispers.co.nz</p>
                </div>
                <div>
                    <h4 class="font-bold text-pure-white">Archives</h4>
                    <p class="text-xs mt-1">Events</p>
                </div>
            </div>
            <div class="text-xs text-pure-white/60 self-center">
                &copy; {{ date('Y') }} Whangaroa Whispers - Kaeo, Northland
            </div>
        </div>
    </x-footer>

</body>
</html>