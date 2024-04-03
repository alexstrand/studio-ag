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
  aria-label="Studio AG priserna"
  image="{{ @asset('images/johanna-with-indy.png') }}"
>
  <x-content-wrapper class="w-full relative z-10">

    {{-- CTA content --}}
    <div class="max-w-[1000px] mx-auto text-center">
      <h2 class="pb-7">Priser</h2>      

      <p class="pb-7 md:w-8/12 md:mx-auto">Känner du dig osäker på vilken lösning som passar dig bäst? Skicka mig ett meddelande så löser vi det tillsammans!</p>
    </div>

    {{-- Services / Tjänster --}}
    <div class="prices w-full">
      <x-swiper-wrapper 
        class="w-full lg:w-8/12 mx-auto pt-4 pb-7"
        slidesPerView="3"
        spaceBetween="30"
      >
        @php($prices = ['Lilla','Mellan','Stora'])

        @foreach($prices as $key => $value)
          <li class="swiper-slide price bg-green text-white shadow-lg px-8 py-16">            
            <h3 class="text-center">{{ $value }}</h3>

            <hr class="max-w-[200px] mx-auto my-7">

            <div class="text-center">
              <p>20h / mån</p>
              <p>-</p>
              <p class="pb-7">16 000 kr ex moms</p>
            </div>

            <x-button 
              text="Jag behöver detta!"
              url="#"
              class="alt"
            />
          </li>
        @endforeach

      </x-swiper-wrapper>
    </div>

  </x-content-wrapper>
</x-section-image>