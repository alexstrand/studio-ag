{{-- Content wrapper component --}}
<div {{ $attributes->merge(['class' => 'content-wrapper w-full max-w-[1440px] mx-auto px-[20px]']) }}>
  {!! $slot !!}
</div>