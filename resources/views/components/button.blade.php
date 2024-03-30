{{-- Button component --}}
@props([
  'text' => 'This is a button',
  'url' => 'https://google.com',
])

<div class="btn-wrapper flex justify-center items-center">
  <a
    {{ $attributes->merge(['class' => 'btn group bg-green hover:bg-white text-base py-4 px-8 border-green border-2 transition-all']) }}
    href="{{ $url }}"
  >
    <span class="btn-text text-white group-hover:text-green uppercase transition-all">
      {!! $text !!}
    </span>
  </a>
</div>