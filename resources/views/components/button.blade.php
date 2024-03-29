{{-- Button component --}}
@props([
  'text' => 'This is a button',
  'url' => 'https://google.com',
])

<div class="btn-wrapper flex justify-center items-center">
  <a
    {{ $attributes->merge(['class' => 'btn group bg-green hover:bg-white py-2 px-6 border-green border-2']) }}
    href="{{ $url }}"
  >
    <span class="btn-text text-white group-hover:text-green uppercase">
      {!! $text !!}
    </span>
  </a>
</div>