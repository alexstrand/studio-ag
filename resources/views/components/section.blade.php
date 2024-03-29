{{-- Section component --}}
@props([
  'image' => false,
  'background_color' => '#FFFFFF'
])

<section {{ $attributes->merge(['class' => 'section w-full relative z-0 py-14 md:py-24']) }}>
    <div class="relative z-10">
      {!! $slot !!}    
    </div>
    
  @if ($image)
    <figure class="absolute top-0 right-0 bottom-0 left-0 z-0">
      <img class="w-full h-full object-cover" src="{{ $image }}" alt="" />
    </figure>
  @endif
</section>