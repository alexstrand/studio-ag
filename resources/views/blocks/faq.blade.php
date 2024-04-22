{{--
  Title: Studio AG FAQ
  Description: Page faq
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag faq
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section 
  class="cta bg-white py-14 md:py-24 overflow-hidden"
  aria-label="{{ get_field('intro_headline') }}"
>
  <x-content-wrapper class="text-center w-full relative z-10">

    {{-- FAQ intro --}}
    <div class="max-w-[1000px] mx-auto">
      <x-subtitle text="{{ get_field('intro_headline') }}" />

      <h2 class="pb-7">{{ get_field('headline') }}</h2>
    </div>

    {{-- FAQ content --}}
    @if($faqs = get_field('faqs'))
      <div class="max-w-[1000px] mx-auto">
        <ul class="faqs accordion-container">

          @foreach($faqs as $faq)
            <li class="faq ac py-7 border-solid border-0 first:border-t border-b border-black">
              <p class="ac-header">
                <button type="button" class="ac-trigger pb-4 text-left font-bold">{{ $faq['question'] }}</button>
              </p>
              <div class="e-content text-left ac-panel">
                <div class="px-2 pt-4">
                  {!! $faq['text'] !!}
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    @endif

  </x-content-wrapper>

  {{-- Abstract line images --}}
  <x-background-lines />
</x-section>