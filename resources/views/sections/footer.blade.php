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
          'menu_class' => 'nav flex flex-col w-full md:flex-row items-center justify-between',
          'echo' => false
        ]) !!}
      </nav>
    @endif

    <p class="w-full text-center">© Studio AG {{ date("Y") }}</p>
  </x-content-wrapper>
</footer>