@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm mt-5']) }}>
    {{ $value ?? $slot }}
</label>
