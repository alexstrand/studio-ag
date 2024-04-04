{{--
  Title: Studio AG hero
  Description: Page hero
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag hero
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section 
  class="hero bg-beige pb-14 md:pb-24 pt-24 md:pt-36"
  aria-label="Välkommen till Studio AG"
>
  <x-content-wrapper class="flex items-center">

    {{-- Hero text content --}}
    <div class="w-full md:w-6/12 text-black">
      <h1 class="text-h2">{!! get_field('headline') !!}</h1>

      @if(get_field('sub_headline'))
        <h2 class="text-h3 pt-6">{!! get_field('sub_headline') !!}</h2>
      @endif

      <div class="md:pl-8 ml-auto pt-6">
        @if(get_field('text'))
          <div class="e-content">{!! get_field('text') !!}</div>
        @endif
  
        @if(get_field('button_1_text') or get_field('button_1_text') && get_field('button_2_text'))
          <div class="btn-group flex items-start pt-7">

            @if(get_field('button_1_text') && get_field('button_1_url'))
              <x-button
                class="mb-4 md:mb-0 mr-4"
                text="{{ get_field('button_1_text') }}"
                url="{{ get_the_permalink(get_field('button_1_url')) }}"
              />
            @endif
    
            @if(get_field('button_2_text') && get_field('button_2_url'))
              <x-button
                text="{{ get_field('button_2_text') }}"
                url="{{ get_the_permalink(get_field('button_2_url')) }}"
              />
            @endif

          </div>
        @endif

      </div>
    </div>

    {{-- Hero image content --}}
    <div class="w-full hidden md:block md:w-5/12 md:ml-auto">
      @if(get_field('image'))
        <x-image 
          image="{{ get_field('image') }}"
          ratio="110" 
        />
      @endif
    </div>

  </x-content-wrapper>
</x-section>