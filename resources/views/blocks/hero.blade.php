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
    <div 
      class="w-full md:w-6/12 text-black"
      data-aos="fade-up"
      data-aos-delay="300"
    >

      <div class="w-full flex items-center md:block">
        @if($headline = get_field('headline') ?? null)
          <h1 class="text-h2 w-6/12 md:w-full">{!! $headline !!}</h1>
        @endif

        {{-- Hero image content desktop --}}
        <div class="md:hidden w-5/12 ml-auto">
          @if(get_field('image'))
            <x-image 
              image="{{ get_field('image') }}"
              ratio="110" 
            />
          @endif
        </div>
      </div>

      <div class="md:pl-8 ml-auto pt-6">
        @if(get_field('text'))
          <div class="e-content">{!! get_field('text') !!}</div>
        @endif
  
        @if(get_field('button_1_text') or get_field('button_1_text') && get_field('button_2_text'))
          <div class="btn-group flex flex-wrap items-start pt-7">

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

    {{-- Hero image content desktop --}}
    <div 
      class="w-full hidden md:block md:w-5/12 md:ml-auto"
      data-aos="fade-up"
      data-aos-delay="400"
    >
      @if(get_field('image'))
        <x-image 
          image="{{ get_field('image') }}"
          ratio="110" 
        />
      @endif
    </div>

  </x-content-wrapper>
</x-section>