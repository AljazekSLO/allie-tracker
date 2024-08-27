@props(['color' => 'white'])

<img src="{{ asset("images/logo-$color.png") }}" alt="Logo"  {{ $attributes->merge(['class' => 'mx-auto']) }}/>