{{-- Button component --}}
@props([
  'text' => 'This is a button',
  'url' => 'https://google.com',
])

<div class="btn-wrapper flex justify-center items-center">
  <a
    {{ $attributes->merge(['class' => 'btn']) }}
    href="{{ $url }}"
  >
    <span class="btn-text">
      {!! $text !!}
    </span>
  </a>
</div>