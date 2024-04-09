{{--
  Title: Studio AG Tjänster
  Description: Page tjänster
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag services tjänster
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section 
  class="services bg-white py-14 md:py-24 overflow-hidden"
  aria-label="{{ get_field('intro_headline') }}"
>
  <x-content-wrapper class="w-full relative z-10">

    {{-- CTA content --}}
    <div class="max-w-[1000px] mx-auto text-center">
      <x-subtitle text="{{ get_field('intro_headline') }}" />

      <h2 class="pb-7">{!! get_field('headline') !!}</h2>     
    </div>

    {{-- Services / Tjänster --}}
    <div class="services w-full">
      <ul class="w-full pt-4 pb-7 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x- lg:gap-x-6 gap-y-16">
        @php($services = get_field('featured_services') ?? null)

        @if($services)
          @foreach($services as $service)
            <li class="service text-black">
              <a 
                class="group"
                href="{{ get_the_permalink(get_field('button_url')) }}"
              >
                <x-image 
                  image="{{ get_post_thumbnail_id($service) }}"
                  ratio="56.25"
                />

                <h3 class="py-4 group-hover:text-red group-focus:text-red transition-all duration-300">{{ get_the_title($service) }}</h3>

                <p class="group-hover:text-red group-focus:text-red transition-all duration-300">{{ get_the_excerpt($service) }} <i class="fa-solid fa-angles-right text-black ml-2 group-hover:ml-3 group-focus:ml-3 group-hover:text-red group-focus:text-red transition-all duration-300"></i></p>
              </a>
            </li>
          @endforeach
        @endif

      </ul>

      @if(get_field('button_text') && get_field('button_url'))
        <div class="services-more pt-10">
          <x-button 
            text="{{ get_field('button_text') }}"
            url="{{ get_the_permalink(get_field('button_url')) }}"
          />
        </div>
      @endif
    </div>

  </x-content-wrapper>

  {{-- Abstract line images --}}
  <div class="lines absolute top-0 left-0 w-full h-full z-0">
    <img src="@asset('images/line-2.png')" class="absolute top-0 left-0 w-[10vw]"/>
    <img src="@asset('images/line-3.png')" class="absolute top-0 right-0 w-[20vw]"/>
  </div>
</x-section>