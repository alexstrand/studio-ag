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

<x-section 
  class="hero bg-beige py-14 md:py-24"
  aria-label="{{ get_field('headline') }}"
>
  <x-content-wrapper class="md:flex md:items-center md:flex-row-reverse">

    {{-- Hero image content --}}
    <div class="w-full md:w-5/12 md:ml-auto pb-7 md:pb-0">
      <x-image 
        image="{{ get_field('image') }}"
        ratio="110"
        position="bottom" 
      />
    </div>

    {{-- Hero text content --}}
    <div class="w-full md:w-6/12 text-black">
      @if(get_field('intro_headline'))
        <x-subtitle text="{{ get_field('intro_headline') }}" />
      @endif

      <h2 class="pb-7">{{ get_field('headline') }}</h2>

      <div>
        <div class="e-content">{!! get_field('text') !!}</div>
  
        @if(get_field('button_text') && get_field('button_url'))
          <div class="btn-group flex items-center pt-7">
            <x-button
              class="mb-4 md:mb-0 mr-4"
              text="{{ get_field('button_text') }}"
              url="{{ get_the_permalink(get_field('button_url')) }}"
            />
          </div>
        @endif
      </div>
    </div>

  </x-content-wrapper>
</x-section>