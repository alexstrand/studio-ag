{{--
  Title: Studio AG form with socials
  Description: Page form and socials section
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
  class="hero bg-red py-14 md:py-24"
  aria-label="{{ get_field('headline') }}"
>
  <x-content-wrapper class="md:flex md:flex-row-reverse">

    {{-- Headline & form --}}
    <div class="w-full md:w-7/12 md:ml-auto pb-7 md:pb-0 text-white">
      <div>
        <h3 class="pb-4">{!! get_field('headline') !!}</h3>
        <div class="e-content pb-4">{!! get_field('text') !!}</div>
      </div>

      @if(get_field('form_shortcode'))
        <div class="form-wrapper form-white">
          {!! do_shortcode(get_field('form_shortcode')) !!}
        </div>
      @endif
    </div>

    {{-- Image and socials --}}
    <div class="w-full md:w-4/12 text-white flex flex-col">
      @if(get_field('image'))
        <div class="pt-4 md:pt-0 w-full flex-1 relative">
          <figure class="w-full md:h-full md:absolute md:top-0 md:right-0 md:bottom-0 md:left-0">
            {!! wp_get_attachment_image(get_field('image'), 'full', "", array( "class" => "w-full h-full object-cover")) !!}
          </figure>
        </div>
      @endif

      <div class="pt-6">
        @if($email = get_field('social_media_links', 'options')['contact_email'] ?? null)
          <p class="pb-4">MAIL: 
            <a 
              class="uppercase"
              href="mailto:{{ $email }}"
            >{{ $email }}</a>
          </p>
        @endif

        {{-- Socials --}}
        @php($socials = get_field('social_media_links', 'options'))

        @if($socials)
          <div class="pb-7 md:pb-0">
            <ul class="flex">
              
              @if(array_key_exists('instagram', $socials))
                <li class="px-2 first:pl-0">
                  <a target="_blank" class="block w-6 h-6" href="{{ $socials['instagram'] }}">
                    <i class="fa-brands fa-instagram w-full h-full object-contain"></i>
                  </a>
                </li>
              @endif

              @if(array_key_exists('facebook', $socials))
                <li class="px-2">
                  <a target="_blank" class="block w-6 h-6" href="{{ $socials['facebook'] }}">
                    <i class="fa-brands fa-square-facebook w-full h-full object-contain"></i>
                  </a>
                </li>
              @endif

              @if(array_key_exists('linkedin', $socials))
                <li class="px-2">
                  <a target="_blank" class="block w-6 h-6" href="{{ $socials['linkedin'] }}">
                    <i class="fa-brands fa-linkedin w-full h-full object-contain"></i>
                  </a>
                </li>
              @endif

            </ul>
          </div>
        @endif
      </div>
    </div> 

  </x-content-wrapper>
</x-section>