{{-- Section component --}}

<section 
  {{ $attributes->merge(['class' => 'section w-full relative z-0']) }}
  tabindex="0"
>
  {!! $slot !!}
</section>