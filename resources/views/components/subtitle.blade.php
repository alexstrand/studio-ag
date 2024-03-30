{{-- Subtitle component --}}
@props([
  'text' => null
])

@if($text)
  <h5 class="subtitle pb-2 md:pb-7">{{ $text }}</h5>
@endif