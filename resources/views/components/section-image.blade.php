{{-- Section component --}}
@props([
  'image' => null
])

<section 
  {{ $attributes->merge(['class' => 'section w-full relative z-0']) }}
  tabindex="0"
>
  {!! $slot !!}

  @if($image)
    <div class="img-wrapper parallax absolute top-0 left-0 w-full h-full z-0 opacity-20">
      <img src="{{ $image }}" alt="Studio AG arbetare" class="w-full h-full object-cover">
    </div>
  @endif
</section>