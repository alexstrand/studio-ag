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
  class="hero bg-beige pb-14 md:pb-24 pt-24 md:pt-36"
  aria-label="Headline here"
>
  <x-content-wrapper class="flex items-center">

    {{-- Hero text content --}}
    <div class="w-full md:w-6/12 text-black">
      <h1 class="text-h2">
        Hej, jag är Johanna!<br>
        Din virtuella assistent
        som avlastar dig
        medan du fokuserar på
        att hjälpa dina klienter
      </h1>

      <div class="md:pl-8 ml-auto pt-6">
        <p>
          Det du brinner för som wellness coach eller femmeprenör att faktiskt ha tid till att hjälpa andra, men som egenföretagare så finns det många tidstjuvar. Tänk dig att slippa känna dig överväldigad med att driva ditt företag och istället skapa tid för att fokusera på dina klienter?<br><br>
          Då finns jag här för dig!
        </p>
  
        <div class="btn-group flex items-start pt-7">
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
      </div>

    {{-- Hero image content --}}
    <div class="w-full hidden md:block md:w-5/12 md:ml-auto">
      <x-image 
        image="{{ @asset('images/test-johanna.png') }}"
        ratio="110" 
      />
    </div>

  </x-content-wrapper>
</x-section>