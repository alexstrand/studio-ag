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
  <x-content-wrapper 
    class="w-full relative z-10"
    data-aos="fade-up"
    data-aos-delay="300"
  >

    {{-- Prices text content --}}
    <div class="max-w-[1000px] mx-auto text-center">
      @if(get_field('intro_headline'))
        <x-subtitle text="{{ get_field('intro_headline') }}" />
      @endif

      <h2 class="pb-7">{{ get_field('headline') }}</h2>      

      <div class="e-content pb-7 md:w-8/12 md:mx-auto">{!! get_field('text') !!}</div>
    </div>

    {{-- Services / Tjänster --}}
    <div class="prices w-full">
      <x-swiper-wrapper 
        class="w-full lg:w-10/12 xl:w-8/12 mx-auto pt-4 pb-7"
        slidesPerView="3"
        spaceBetween="30"
        autoSpeed="200000"
      >
        @php($prices = get_field('prices') ?? array())

        @foreach($prices as $price)
          <li class="swiper-slide price bg-green text-white rounded shadow-lg px-8 py-12" tabindex="0">            
            
            {{-- Package title --}}
            <h3 class="text-center pb-2">{{ $price['title'] ?? null }}</h3>

            {{-- Price --}}
            <p class="font-bold text-xl text-center">{!! $price['price'] !!}</p>

            {{-- Price --}}
            <p class="font-bold text-center pb-2">{!! $price['hours'] !!}</p>

            {{-- Contract length --}}
            <div class="text-center">{!! $price['below_price_text'] !!}</div>

            <hr class="border-red max-w-[80%] mx-auto my-4">

            {{-- Info text --}}
            <div class="text-center pb-7">{!! $price['info_text'] !!}</div>

            @php($buttonText = $price['button_text'] ?? null)
            @php($buttonUrl = $price['button_url'] ?? null)

            @if($buttonText && $buttonUrl)
              <x-button 
                text="{{ $buttonText }}"
                url="{{ $buttonUrl }}"
                class="alt"
              />
            @endif
          </li>
        @endforeach

      </x-swiper-wrapper>
    </div>

  </x-content-wrapper>
</x-section-image>