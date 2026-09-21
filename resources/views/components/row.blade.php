@props([
    'as' => 'div',                 {{-- HTML tag: div, header, footer, section, etc. --}}
    'outerBg' => 'bg-transparent',  {{-- Tailwind class or arbitrary color for the full-width row --}}
    'innerBg' => 'bg-transparent',  {{-- Tailwind class or arbitrary color for the centered box --}}
    'maxWidth' => 'max-w-7xl',     {{-- Center container max-width --}}
    'innerClass' => '',            {{-- Extra classes for the inner box (e.g. padding, rounded) --}}
])

<{{ $as }} {{ $attributes->class(['w-full', $outerBg]) }}>
    {{-- Responsive centered wrapper with safe gutter padding --}}
    <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 {{ $maxWidth }}">
        {{-- Inner content container with custom inner background --}}
        <div class="w-full {{ $innerBg }} {{ $innerClass }}">
            {{ $slot }}
        </div>
    </div>
</{{ $as }}>