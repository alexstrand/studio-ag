{{--
  Title: Studio AG form (large)
  Description: Page form
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag form
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section-image
  class="form-large bg-black py-14 md:py-24 overflow-hidden text-white"
  aria-label="{{ get_field('headline') }}"
  image="{{ get_field('background_image') }}"
>
  <x-content-wrapper class="w-full relative z-10">

    {{-- CTA content --}}
    <div class="max-w-[1000px] mx-auto text-center">
      @if(get_field('intro_headline'))
        <x-subtitle text="{{ get_field('intro_headline') }}" />
      @endif

      <h2 class="pb-7">{{ get_field('headline') }}</h2>      

      <div class="e-content pb-7">{!! get_field('text') !!}</div>
    </div>

    {{-- Form content --}}
    <div class="w-full md:w-10/12 mx-auto form-wrapper form-white">
      @if(get_field('form_id'))
        {!! do_shortcode('[gravityform id="' . get_field('form_id') . '" title="false"]') !!}
      @endif
    </div>

  </x-content-wrapper>
</x-section-image>