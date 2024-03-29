{{--
  Title: Studio AG hero
  Description: Page hero
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag hero
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section 
  class="hero bg-beige"
  aria-label="Headline here"
>
  <x-content-wrapper class="flex items-center">

    {{-- Hero text content --}}
    <div class="w-full md:w-6/12 text-black">
      <h1 class="hero-text font-semibold pb-4">Hej, jag är Johanna!
        Din virtuella assistent
        som avlastar dig
        medan du fokuserar på
        att hjälpa dina klienter
      </h1>

      <p class="pb-8">
        Det du brinner för som wellness coach eller femmeprenör att faktiskt ha tid till att hjälpa andra, men som egenföretagare så finns det många tidstjuvar. Tänk dig att slippa känna dig överväldigad med att driva ditt företag och istället skapa tid för att fokusera på dina klienter?
Då finns jag här för dig!
Tillsammans kommer vi fram till den bästa lösningen så att du kan leva din sanning & driva ditt mission med stor glädje!
      </p>

      <div class="btn-group flex items-center">
        <x-button
          class="mb-4 md:mb-0 mr-4"
          text="Example button"
          url="#"
        />

        <x-button
          text="Example button"
          url="#"
        />
      </div>
    </div>

    {{-- Hero image content --}}
    <div class="w-full md:w-6/12 md:pl-10">
      <x-image />
    </div>

  </x-content-wrapper>
</x-section>