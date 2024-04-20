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
    <div class="img-wrapper jarallax absolute top-0 left-0 w-full h-full z-0 opacity-30">
      {!! wp_get_attachment_image($image, 'full', "", array( "class" => "jarallax-img w-full h-full object-cover")) !!}
    </div>
  @endif
</section>