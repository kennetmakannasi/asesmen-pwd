@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => ' border-gray-200 border-2 rounded-md shadow-sm h-7']) }}>
