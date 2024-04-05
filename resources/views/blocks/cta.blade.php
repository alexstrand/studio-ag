{{--
  Title: Studio AG CTA
  Description: Page cta
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag cta
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section 
  class="cta bg-white py-14 md:py-24 overflow-hidden"
  aria-label="{{ get_field('intro_headline') }}"
>
  <x-content-wrapper class="text-center w-full relative z-10">

    {{-- CTA content --}}
    <div class="max-w-[1000px] mx-auto">
      <x-subtitle text="{{ get_field('intro_headline') }}" />

      <h2 class="pb-7">
        {{ get_field('headline') }}
        @if(get_field('carousel_words'))
          @php($words = implode(', ', array_column(get_field('carousel_words'), 'word')))
          
          <span class="type-js" data-words="{{ $words }}"></span>
        @endif
      </h2>
      
      @if(get_field('link_text') && get_field('link_url'))
        <x-text-link 
          text="{{ get_field('link_text') }}" 
          url="{{ get_the_permalink(get_field('link_url')) }}"
        />
      @endif
    </div>

  </x-content-wrapper>

  {{-- Abstract line images --}}
  <div class="lines absolute top-0 left-0 w-full h-full z-0">
    <img src="@asset('images/line-2.png')" class="absolute top-0 left-0 w-[10vw]"/>
    <img src="@asset('images/line-3.png')" class="absolute top-0 right-0 w-[20vw]"/>
  </div>
</x-section>