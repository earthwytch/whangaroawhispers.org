@props([
    'outerBg' => 'bg-neutral-900',
    'innerBg' => 'bg-transparent',
    'maxWidth' => 'max-w-7xl',
    'innerClass' => 'py-8 text-sm text-neutral-400',
])

<x-row 
    as="footer" 
    :outer-bg="$outerBg" 
    :inner-bg="$innerBg" 
    :max-width="$maxWidth" 
    :inner-class="$innerClass"
    {{ $attributes->merge(['class' => 'mt-auto']) }}
>
    {{ $slot }}
</x-row>