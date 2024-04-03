{{--
  Title: Studio AG Reviews
  Description: Page reviews
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag reviews
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section
  class="reviews bg-pink py-14 md:py-24 overflow-hidden"
  aria-label="Studio AG klientrecensioner"
>
  <x-content-wrapper class="w-full relative z-10">

    {{-- Reviews content --}}
    <div class="max-w-[1000px] mx-auto text-center">
      <x-subtitle text="KLIENTRECENSIONER" />

      <h2 class="pb-7">Vad klienter säger</h2>      
    </div>

    {{-- Reviews --}}
    <div class="prices w-full">
      <x-swiper-wrapper 
        class="w-full pt-4 pb-7"
        slidesPerView="3"
        spaceBetween="30"
        centerMode="true"
        loop="true"
      >
        @php($reviews = ['Lilla','Mellan','Stora','Lilla','Mellan','Stora'])

        @foreach($reviews as $key => $value)
          <li class="swiper-slide review text-black pt-16 pr-8 pb-8 pl-8 relative [&.swiper-slide-active]:bg-beige [&.swiper-slide-active]:rounded [&.swiper-slide-active]:shadow-lg transition-all duration-300">            
            <div class="absolute top-6 left-6">
              <i class="fa-solid fa-quote-right text-green text-[2.5rem]"></i>
            </div>
            
            <p class="pl-8">Adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam.
              Wiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim
              dicta sunt explicabo. Nemo enim ipsam
              voluptatem quia voluptas.
              Adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna
              aliqua.</p>

            <div class="pt-7">
              <div class="flex justify between items-center">
                <div class="w-4/12 rounded-full overflow-hidden">
                  <x-image image="{{ @asset('images/review-demo.png') }}"/>
                </div>
                <div class="pl-7">
                  <h5>Paulina Suonvieri</h5>
                  <p>Nutritionist, Content Creator & Crete Expert</p>
                </div>
              </div>
            </div>
          </li>
        @endforeach

      </x-swiper-wrapper>
    </div>

  </x-content-wrapper>
</x-section>