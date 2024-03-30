{{-- Text link component underline underline-offset-[10px] decoration-2" --}}
@props([
  'text' => null,
  'url' => null
])

@if($text && $url)
  <a
    class="text-link relative after:absolute after:bottom-[-10px] after:left-0 after:h-[2px] after:w-full after:bg-black hover:after:w-0 focus:after:w-0 after:transition-all"
    href="{{ $url }}"
  >
    {{ $text }}
  </a>
@endif