<header id="header" class="banner w-full fixed z-[100] left-0 {{ is_user_logged_in() ? 'top-[46px] md:top-8' : 'top-0' }} [&.scrolled]:bg-beige py-2 md:py-7 [&.scrolled]:md:py-4 transition-all duration-300">
  <x-content-wrapper class="w-full flex items-center justify-between md:justify-start">
    <a class="brand text-black italic relative z-10 mr-16 font-bold text-2xl" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary bg-beige md:bg-transparent fixed md:relative top-0 right-0 bottom-0 left-0 md:flex md:flex-row md:justify-between md:items-center md:flex-1" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex flex-col md:flex-row items-center',
          'echo' => false
        ]) !!}
      </nav>
    @endif

    {{-- Hamburger menu --}}
    <button id="hamburger-trigger" class="block md:hidden tham tham-e-spin tham-w-6">
      <div class="tham-box">
        <div class="tham-inner" />
      </div>
    </button>

  </x-content-wrapper>
</header>
