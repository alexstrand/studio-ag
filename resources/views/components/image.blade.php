{{-- Image component --}}
@props([
  'image' => null,
  'ratio' => '100',
  'position' => 'bottom'
])

@if($image)
  <div class="w-full h-0 relative" style="padding-bottom: {{ $ratio }}%;">
    <figure class="w-full h-full absolute top-0 right-0 bottom-0 left-0">
      <img 
        src="{{ $image }}"
        alt="Demo image"
        class="w-full h-full object-cover"
        style="object-position: {{ $position }};"
      />
    </figure>
  </div>
@endif