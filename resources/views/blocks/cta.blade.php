{{--
  Title: Studio AG CTA with typing text
  Description: Page cta with typing text
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag cta typing text
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

      <h2 class="pb-7 typing-text">
        {{ get_field('headline') }}<br>
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
  <x-background-lines />
</x-section>