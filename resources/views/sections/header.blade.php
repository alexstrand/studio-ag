<header class="banner w-full fixed z-[100] left-0 {{ is_user_logged_in() ? 'top-[46px] md:top-8' : 'top-0' }}">
  <x-content-wrapper class="w-full flex items-center py-4">
    <a class="brand italic mr-16 font-bold text-2xl" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary flex justify-between items-center flex-1" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav md:flex',
          'echo' => false
        ]) !!}
  
        <x-button text="Boka samtal" />
      </nav>
    @endif
  </x-content-wrapper>
</header>
