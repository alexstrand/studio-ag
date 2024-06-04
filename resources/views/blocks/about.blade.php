{{--
  Title: Studio AG about
  Description: Page about section
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag about
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
  class="hero py-14 md:py-24 relative"
  aria-label="{{ get_field('headline') }}"
  style="background-color: {{ $bgColor }};"
>
  <x-content-wrapper class="relative z-10 md:flex md:items-center md:flex-row-reverse">

    {{-- About image content --}}
    <div 
      class="w-full md:w-5/12 md:ml-auto pb-7 md:pb-0"
      data-aos="fade-up"
      data-aos-delay="400"
    >
      <x-image 
        image="{{ get_field('image') }}"
        ratio="110"
        position="bottom" 
      />
    </div>

    {{-- About text content --}}
    <div 
      class="w-full md:w-6/12 {{ in_array($bgColor, $darkColors) ? 'text-white' : 'text-black' }}"
      data-aos="fade-up"
      data-aos-delay="300"
    >
      @if(get_field('intro_headline'))
        <x-subtitle  
          class="{{ in_array($bgColor, $darkColors) ? 'text-white' : 'text-black' }}" 
          text="{{ get_field('intro_headline') }}"
        />
      @endif

      <h2 class="pb-7">{{ get_field('headline') }}</h2>

      <div>
        <div class="e-content">{!! get_field('text') !!}</div>
  
        @if(get_field('button_text') && get_field('button_url'))
          <div class="btn-group flex items-center pt-7">
            <x-button
              class="mb-4 md:mb-0 mr-4 {{ $bgColor === '#154734' ? 'alt' : '' }}"
              text="{{ get_field('button_text') }}"
              url="{{ get_the_permalink(get_field('button_url')) }}"
            />
          </div>
        @endif
      </div>
    </div>

  </x-content-wrapper>

  @if($bgColor === '#FFFFFF')
    <x-background-lines />
  @endif
</x-section>