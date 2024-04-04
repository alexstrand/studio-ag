<footer class="content-info bg-green text-white py-14 md:py-24">
  <x-content-wrapper class="text-center">
    <a class="brand w-full block" href="{{ home_url('/') }}">
      <img 
        src="@asset('images/studio-ag-logo-white.svg')" 
        alt="Studio AG logga" 
        class="w-[150px] mx-auto mb-7"
      />
    </a>

    {{-- Footer menu --}}
    @if (has_nav_menu('footer_navigation'))
      <nav class="nav-footer pb-7 w-full md:flex md:flex-row md:justify-between md:items-center" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'footer_navigation',
          'menu_class' => 'nav flex flex-col w-full md:flex-row items-center justify-center',
          'echo' => false
        ]) !!}
      </nav>
    @endif

    {{-- Socials --}}
    @php($socials = get_field('social_media_links', 'options'))

    @if($socials)
      <div class="pb-7">
        <ul class="flex justify-center items-center">
          
          @if(array_key_exists('instagram', $socials))
            <li class="px-2">
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

    <p class="w-full text-center">{{ get_field('copyright_text', 'options') }} {{ date("Y") }}</p>
  </x-content-wrapper>
</footer>