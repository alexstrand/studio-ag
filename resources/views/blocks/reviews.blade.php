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
  aria-label="{{ get_field('intro_headline') }}"
>
  <x-content-wrapper 
    class="w-full relative z-10"
    data-aos="fade-up"
    data-aos-delay="150"
  >

    {{-- Reviews content --}}
    <div class="max-w-[1000px] mx-auto text-center">
      @if(get_field('intro_headline'))
        <x-subtitle text="{{ get_field('intro_headline') }}" />
      @endif

      <h2 class="pb-7">{{ get_field('headline') }}</h2>      
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
        @php($reviews = get_field('reviews'))

        @if($reviews)
          @foreach($reviews as $key => $value)
            <li class="swiper-slide group review h-auto flex items-start">            
              <div @class([
                'text-black pt-16 pr-8 pb-8 pl-8 relative transition-all duration-300',
                'group-[&.swiper-slide-active]:bg-beige group-[&.swiper-slide-active]:rounded group-[&.swiper-slide-active]:shadow-lg'
              ])>
                <div class="absolute top-6 left-6">
                  <i class="fa-solid fa-quote-right text-green text-[2.5rem]"></i>
                </div>
                
                <p class="pl-8">{!! $value['text'] !!}</p>
  
                <div class="pt-7">
                  <div class="flex justify-start items-center">
  
                    @php($image = $value['image'] ?? null)
  
                    @if($image)
                      <div class="w-4/12 rounded-full overflow-hidden shrink-0 border-2 border-green">
                        <x-image image="{{ $image }}"/>
                      </div>
                    @endif
  
                    <div class="{{ $image ? 'pl-7' : '' }}">
                      <h5 class="!text-2xl">{{ $value['name'] }}</h5>
                      <p>{{ $value['title'] }}</p>
                    </div>
                  </div>
  
                </div>
              </div>
            </li>
          @endforeach
        @endif

      </x-swiper-wrapper>
    </div>

  </x-content-wrapper>
</x-section>