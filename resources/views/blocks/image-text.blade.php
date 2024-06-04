{{--
  Title: Studio AG image with text
  Description: Page image text section
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag image with text
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

@php($imagePosition = get_field('image_orientation'))

<x-section 
  class="hero bg-red py-14 md:py-24"
  aria-label="{{ get_field('intro_headline') }}"
>
  <x-content-wrapper 
    class="md:flex md:items-center {{ $imagePosition === 'left' ? '' : 'md:flex-row-reverse' }}"
    data-aos="fade-up"
    data-aos-delay="300"
  >

    {{-- Image content --}}
    <div class="w-full md:w-5/12 {{ $imagePosition === 'left' ? 'md:mr-auto' : 'md:ml-auto' }} pb-7 md:pb-0">
      <x-image 
        image="{{ get_field('image') }}"
        ratio="110"
        position="top" 
      />
    </div>

    {{-- Text content --}}
    <div class="w-full md:w-6/12 text-white">
      <x-subtitle text="{{ get_field('intro_headline') }}" />

      <h2 class="pb-7">{!! get_field('headline') !!}</h2>

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