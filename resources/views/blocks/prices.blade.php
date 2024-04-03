{{--
  Title: Studio AG Prices
  Description: Page prices
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag priser prices
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section-image
  class="prices bg-white py-14 md:py-24 overflow-hidden"
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

      <p class="pb-7 md:w-8/12 md:mx-auto">{!! get_field('text') !!}</p>
    </div>

    {{-- Services / Tjänster --}}
    <div class="prices w-full">
      <x-swiper-wrapper 
        class="w-full lg:w-8/12 mx-auto pt-4 pb-7"
        slidesPerView="3"
        spaceBetween="30"
      >
        @php($prices = get_field('prices') ?? array())

        @foreach($prices as $key => $price)
          <li class="swiper-slide price bg-green text-white shadow-lg px-8 py-16">            
            <h3 class="text-center">{{ $price['title'] ?? null }}</h3>

            <hr class="max-w-[200px] mx-auto my-7">

            <div class="text-center">
              <p>{{ $price['info_text'] ?? null }}</p>
              <p>-</p>
              <p class="pb-7">{{ $price['price'] ?? null }}</p>
            </div>

            @php($buttonText = $price['button_text'] ?? null)
            @php($buttonUrl = $price['button_url'] ?? null)

            @if($buttonText && $buttonUrl)
              <x-button 
                text="{{ $buttonText }}"
                url="{{ get_the_permalink($buttonUrl) }}"
                class="alt"
              />
            @endif
          </li>
        @endforeach

      </x-swiper-wrapper>
    </div>

  </x-content-wrapper>
</x-section-image>