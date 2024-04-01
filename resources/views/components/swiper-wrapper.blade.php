{{-- Swiper wrapper component --}}
@props([
  'slidesPerView' => 1,
  'spaceBetween' => 0,
  'loop' => false
])

@php($uniqueID = uniqid())

@if($slot)
  <!-- Slider main container -->
  <div {{ $attributes->merge(['class' => 'swiper swiper-'.$uniqueID]) }}>
    <!-- Additional required wrapper -->
    <ul class="swiper-wrapper">
      {!! $slot !!}
    </ul>
    <!-- If we need pagination -->
    <div class="swiper-pagination bottom-0"></div>
  </div>
@endif

{{-- Swiper options --}}
<script type="module">
  const swiper = new Swiper('.swiper-{{ $uniqueID }}', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1, 
    spaceBetween: 30,
    speed: 1000,
    autoplay: {
      delay: 8000,
      disableOnInteraction: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    breakpoints: {
      768: {
        slidesPerView: {{ $slidesPerView }},
        spaceBetween: {{ $spaceBetween }}
      }
    }
  });
</script>

