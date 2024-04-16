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

@php($services = get_field('featured_services') ?? null)

<x-section 
  class="services bg-white py-14 md:py-24 overflow-hidden"
  aria-label="{{ get_field('intro_headline') }}"
>
  <x-content-wrapper class="w-full relative z-10">

    {{-- CTA content --}}
    <div class="max-w-[1000px] mx-auto text-center">
      <x-subtitle text="{{ get_field('intro_headline') }}" />

      <h2 class="pb-7">{!! get_field('headline') !!}</h2>  
      
      <div class="pb-10 max-w-[800px] mx-auto">{!! get_field('text') !!}</div>

      @if(get_field('button_text_top') && get_field('button_url_top'))
        <div class="services-more pb-10">
          <x-button 
            text="{{ get_field('button_text_top') }}"
            url="{{ get_the_permalink(get_field('button_url_top')) }}"
          />
        </div>
      @endif
    </div>

    {{-- Services / Tjänster --}}
    <div class="services w-full">
      
      @if($services)

        {{-- Featured services --}}
        <div class="w-full pt-4 pb-7 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x- lg:gap-x-6 gap-y-16">

          @foreach($services as $service)
            <article class="service text-black">
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
            </article>
          @endforeach
          
        </div>
      @else

        {{-- All services --}}
        <div class="w-full pt-4 pb-7 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x- lg:gap-x-6 gap-y-16">

          @php($services = get_posts([
            'numberposts' => -1,
            'post_type' => 'service',
            'orderby' => 'menu_order'
          ]))

          @if(!empty($services))
            @php($services = array_column($services, 'ID'))

            @foreach($services as $service)
              <article class="service text-black">
                <x-image 
                  image="{{ get_post_thumbnail_id($service) }}"
                  ratio="56.25"
                />

                <h3 class="py-4">{{ get_the_title($service) }}</h3>

                <p class="">{{ get_the_excerpt($service) }}</p>
              </article>
            @endforeach
          @endif
          
        </div>
      @endif

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
  <x-background-lines />
</x-section>