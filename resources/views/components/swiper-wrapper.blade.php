{{-- Swiper wrapper component --}}
@props([
  'slidesPerView' => 1,
  'spaceBetween' => 0,
  'loop' => 'false',
  'centerMode' => 'false',
  'autoSpeed' => 8000,
])

@php($uniqueID = uniqid())

@if($slot)
  <!-- Slider main container -->
  <div {{ $attributes->merge(['class' => 'swiper overflow-y-visible swiper-'.$uniqueID]) }}>
    <!-- Additional required wrapper -->
    <ul class="swiper-wrapper flex justify-center">
      {!! $slot !!}
    </ul>
    <!-- If we need pagination -->
    <div class="swiper-pagination bottom-0 pt-12"></div>
  </div>
@endif

{{-- Swiper options --}}
<script type="module">
  const swiper = new Swiper('.swiper-{{ $uniqueID }}', {
    direction: 'horizontal',
    loop: {{ $loop }},
    slidesPerView: 1, 
    spaceBetween: 30,
    speed: 1000,
    autoplay: {
      delay: {{ $autoSpeed }},
      disableOnInteraction: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    breakpoints: {
      768: {
        slidesPerView: {{ $slidesPerView }},
        spaceBetween: {{ $spaceBetween }},
        centeredSlides: {{ $centerMode }},
      }
    }
  });
</script>

