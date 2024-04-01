{{--
  Title: Studio AG CTA
  Description: Page cta
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag cta
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section 
  class="cta bg-white py-14 md:py-24 overflow-hidden"
  aria-label="Headline here"
>
  <x-content-wrapper class="text-center w-full relative z-10">

    {{-- CTA content --}}
    <div class="max-w-[1000px] mx-auto">
      <x-subtitle text="VIRTUELL FÖRETAGSSUPPORT" />

      <h2 class="pb-7">Jag tar hand om dina tråkiga uppgifter
        som lägger sig på hög i ditt schema,
        så att du kan fokusera på de viktiga
        sakerna som <span class="text-carousel"><div class="carousel-item">kurser</div><div class="carousel-item">data entry</div><div class="carousel-item">baking</div><div class="carousel-item">sexy tajm</div></span></h2>
      
      <x-text-link text="LÅT OSS LÄRA KÄNNA VARANDRA" url="#" />
    </div>

  </x-content-wrapper>

  {{-- Abstract line images --}}
  <div class="lines absolute top-0 left-0 w-full h-full z-0">
    <img src="@asset('images/line-2.png')" class="absolute top-0 left-0 w-[10vw]"/>
    <img src="@asset('images/line-3.png')" class="absolute top-0 right-0 w-[20vw]"/>
  </div>
</x-section>