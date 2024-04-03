{{-- Image component --}}
@props([
  'image' => null,
  'ratio' => '100',
  'position' => 'bottom'
])

@php
  $image_positions = [
    'bottom' => 'object-bottom',
    'center' => 'object-center',
    'left' => 'object-left',
    'left-bottom' => 'object-left-bottom',
    'left-top' => 'object-left-top',
    'right' => 'object-right',
    'right-bottom' => 'object-right-bottom',
    'right-top' => 'object-right-top',
    'top' => 'object-top'
  ];
@endphp

@php($objectPosition = $image_positions[$position])

@if($image)
  <div class="w-full h-0 relative" style="padding-bottom: {{ $ratio }}%;">
    <figure class="w-full h-full absolute top-0 right-0 bottom-0 left-0">
      {!! wp_get_attachment_image($image, 'full', "", array( "class" => "w-full h-full object-cover " . $objectPosition)) !!}
    </figure>
  </div>
@endif