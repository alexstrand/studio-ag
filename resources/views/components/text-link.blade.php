{{-- Text link component underline underline-offset-[10px] decoration-2" --}}
@props([
  'text' => null,
  'url' => null
])

@if($text && $url)
  <a
    class="text-link relative after:absolute after:bottom-[-10px] after:left-0 after:h-[2px] after:w-0 after:bg-black hover:after:w-full focus:after:w-full after:transition-all after:duration-300"
    href="{{ $url }}"
  >
    {{ $text }} <i class="fa-solid fa-angles-right ml-[2px]"></i>
  </a>
@endif