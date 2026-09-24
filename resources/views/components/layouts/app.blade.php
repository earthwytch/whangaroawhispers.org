@inject('weather', 'App\Services\WeatherService')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Whangaroa Whispers' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-page-canvas text-copy-body">

    <header role="banner">
        
        <x-row outerBg="bg-brand-subbar" class="shadow-xl" innerClass="py-4 flex justify-center items-center text-pure-white">
            <nav aria-label="Main Navigation" class="hidden md:flex gap-5 font-body tracking-wide items-center">
                <a href="#" class="hover:text-brand-subbar" aria-label="Home">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" focusable="false">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="sr-only">Home</span>
                </a>
                <a href="#" class="hover:text-brand-subbar">News</a>
                <a href="#" class="hover:text-brand-subbar">Events</a>
                <a href="#" class="hover:text-brand-subbar">Advertising</a>
                <a href="#" class="hover:text-brand-subbar">Contact us</a>
            </nav>
        </x-row>

        <div class="w-full h-64 md:h-80 lg:h-96 bg-cover bg-center relative border-b border-b-accent-green border-t border-t-navy" 
             style="background-image: url('/bling/images/whangaroa-banner.webp');" 
             role="img" 
             aria-label="Panoramic view of Whangaroa Harbour">
            
            <!-- Flex container for bulletproof vertical centering -->
            <div class="max-w-7xl mx-auto h-full flex items-center px-4 sm:px-6 lg:px-8 w-full">
                
                <!-- w-full limits width on mobile to maintain x-margins. md:w-auto and max-w control desktop size -->
                <div class="bg-brand-navy/60 backdrop-blur-sm px-6 py-4 rounded shadow-lg border border-pure-white/10 w-full md:w-auto md:max-w-xl lg:max-w-2xl">
                    
                    <h1 class="text-4xl md:text-5xl font-title font-bold text-pure-white mb-2">Whangaroa Whispers</h1>

                    <p class="text-pure-white text-xl tracking-wide">Connecting the Whangaroa community <svg class="inline h-10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2200 2200" fill="currentColor"><path d="M1907.077,623.957c-7.101-50.137-23.803-99.099-48.806-143.131c-69.212-122.899-202.469-205.261-342.732-215.692
                c-171.634-13.137-353.376,80.583-421.922,240.928c-0.811,1.953-1.594,3.922-2.363,5.897
                c-16.566-49.396-39.517-96.63-71.107-139.012c-68.567-93.198-180.972-156.408-298.389-155.517
                c-71.343-0.13-141.959,20.619-203.416,56.365c-94.805,54.402-160.846,142.236-195.136,245.098
                c-52.665,165.96-42.61,345.635,14.526,508.365c56.27,158.434,161.254,297.184,289.169,404.657
                c71.421,60.754,152.256,114.557,245.384,133.342c17.029,3.009,28.09-17.229,17.02-29.863c-5.776-6.665-12.016-13.091-18.165-19.229
                c-56.013-56.551-119.935-104.78-177.527-158.861C506.717,1181.782,400.501,938.069,431.95,680.964
                c10.058-86.793,35.089-171.062,94.389-235.475c52.092-55.504,127.221-91.948,203.356-92.293
                c79.492,0.553,168.944,34.491,228.991,85.745c36.003,30.673,91.267,101.9,115.442,152.345c7.838,16.356,25.872,12.91,34.839,0.012
                c7.528-10.812,19.471-28.839,26.643-37.866c90.292-112.164,242.564-172.678,383.661-149.864
                c76.393,13.61,147.442,57.757,191.767,121.65c34.469,49.06,50.334,108.641,46.841,168.362
                c-12.014,278.608-281.102,522.53-466.215,713.44c-149.127,154.103-349.689,332.482-378.879,556.053
                c-1.11,20.284,23.159,25.675,32.427,11.774c61.106-88.489,133.257-165.095,208.583-241.54
                c113.7-117.972,237.446-226.411,355.996-340.573c144.998-141.378,288.238-294.534,360.88-488.172
                C1903.085,815.791,1919.477,718.441,1907.077,623.957z"/></svg></p>
                </div>
            </div>
        </div>

    </header>

    <x-row  innerClass="py-2.5 flex items-center text-brand-navy">
        <div class="flex items-center justify-between w-full">

            <div>
                <p class="rounded-xl bg-accent-green text-pure-white text-sm py-3 px-4">Easter issue out now! <a href="#" class="text-pure-white underline">Find one near you</a></p>
            </div>
            <div class="flex items-center gap-2">
                <img src="{{ $weather->icon }}" alt="{{ $weather->condition }}" class="h-10" />
                <p class="text-sm">{{ $weather->condition }}</p>
                <p>|</p>
                <p class="text-sm">{{ $weather->temp }}°C </p>
            </div>
            
        </div>
    </x-row>

    <!-- Main Content Area -->
    <main role="main" class="flex-1 w-full">
        {{ $slot }}
    </main>

    <!-- Pinned Navy Footer -->
    <x-footer outerBg="bg-brand-navy" innerClass="py-6 text-pure-white/80">
        <div class="flex flex-col sm:flex-row justify-between gap-4">
            <div class="flex gap-8">
                <div class="flex flex-col gap-1 text-sm">
                    <p class="text-pure-white">Contact the team</p>
                    <p class="text-pure-white">Whangaroa Whispers archive</p>
                    <p class="text-pure-white">Find an event</p>
                    <p class="text-pure-white">Advertise with us</p>
                </div>
            </div>
            <div class="text-xs text-pure-white/60 self-center">
                &copy; {{ date('Y') }} Whangaroa Whispers - Kaeo, New Zealand. All rights reserved.
            </div>
        </div>
    </x-footer>

</body>
</html>