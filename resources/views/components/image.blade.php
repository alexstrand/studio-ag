{{-- Image component --}}
@props([
  'image' => null,
  'ratio' => '100',
])

@if($image)
  <div class="w-full h-0 relative" style="padding-bottom: {{ $ratio }}%;">
    <figure class="w-full h-full absolute top-0 right-0 bottom-0 left-0">
      {!! wp_get_attachment_image($image, 'full', "", array( "class" => "w-full h-full object-cover ")) !!}
    </figure>
  </div>
@endif