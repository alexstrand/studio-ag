{{--
  Title: Studio AG CTA
  Description: Page cta with optional colors
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag cta colors
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

@php
  $bgColor = get_field('background_color');

  $darkColors = [
    '#D35845',
    '#154734'
  ];
@endphp

<x-section 
  class="cta py-14 md:py-24 overflow-hidden"
  aria-label="{{ get_field('intro_headline') }}"
  style="background-color: {{ $bgColor }};"
>
  <x-content-wrapper class="text-center w-full relative z-10">

    {{-- CTA content --}}
    <div 
      class="max-w-[1000px] mx-auto {{ in_array($bgColor, $darkColors) ? 'text-white' : 'text-black' }}"
      data-aos="fade-up"
      data-aos-delay="150"
    >
      <x-subtitle 
        class="{{ in_array($bgColor, $darkColors) ? 'text-white' : 'text-black' }}" 
        text="{{ get_field('intro_headline') }}" 
      />

      <h2 class="pb-7">{!! get_field('headline') !!}</h2>
      
      @if(get_field('link_text') && get_field('link_url'))
        <x-text-link 
          text="{{ get_field('link_text') }}" 
          url="{{ get_the_permalink(get_field('link_url')) }}"
        />
      @endif
    </div>

  </x-content-wrapper>

  {{-- Abstract line images --}}
  @if($bgColor === '#FFFFFF')
    <x-background-lines />
  @endif
</x-section>