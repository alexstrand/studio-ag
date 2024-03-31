{{-- Subtitle component --}}
@props([
  'text' => null
])

@if($text)
  <h5 class="subtitle pb-2 md:pb-5">{{ $text }}</h5>
@endif