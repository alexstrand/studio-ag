@php
  $mobile_header_link_title = get_field('mobile_header_link', 'options')['title'] ?? null;
  $mobile_header_link_url = get_field('mobile_header_link', 'options')['url'] ?? null;
@endphp

<header id="header" class="banner w-full bg-beige flex items-center fixed z-[100] left-0 {{ is_user_logged_in() ? 'top-[46px] md:top-8' : 'top-0' }} [&.scrolled]:bg-beige py-4 md:py-7 [&.scrolled]:md:py-4 transition-all duration-300">
  <x-content-wrapper class="w-full flex items-center justify-between md:justify-start">
    <a class="brand relative z-10 md:mr-16 transition-all duration-300" href="{{ home_url('/') }}">
      <figure>
        <img src="@asset('images/studio-ag-logo.svg')" alt="Studio AG logga" />
      </figure>
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <nav 
        class="nav-primary bg-beige md:bg-transparent fixed md:relative top-0 right-0 bottom-0 left-0 md:flex md:flex-row md:justify-between md:items-center md:flex-1" 
        aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
      >
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex flex-col md:flex-row items-center',
          'echo' => false
        ]) !!}
      </nav>
    @endif

    <div class="flex items-center space-x-4 md:hidden">
      {{-- Mobile header button --}}
      @if ($mobile_header_link_title && $mobile_header_link_url)
        <x-button 
          :text="$mobile_header_link_title"
          :url="$mobile_header_link_url"
        />
      @endif

      {{-- Hamburger menu --}}
      <button id="hamburger-trigger" class="tham tham-e-spin tham-w-6">
        <div class="tham-box">
          <div class="tham-inner" />
        </div>
      </button>
    </div>

  </x-content-wrapper>
</header>
