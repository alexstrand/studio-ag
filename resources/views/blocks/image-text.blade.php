{{--
  Title: Studio AG image with text
  Description: Page image text section
  Category: studioag
  Icon: admin-comments
  Keywords: studio ag image with text
  Mode: preview
  Align: full
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
--}}

<x-section 
  class="hero bg-red py-14 md:pb-24 md:pt-28"
  aria-label="Headline here"
>
  <x-content-wrapper class="md:flex md:items-center">

    {{-- Hero image content --}}
    <div class="w-full md:w-5/12 md:mr-auto pb-7 md:pb-0">
      <x-image 
        image="{{ @asset('images/johanna-flowers.png') }}"
        ratio="120"
        position="top" 
      />
    </div>

    {{-- Hero text content --}}
    <div class="w-full md:w-6/12 text-white">

      <x-subtitle text="DU BEHÖVER INTE GÖRA DET ENSAM" />

      <h2 class="pb-7">Xxxxx Xxxxx Xxx</h2>

      <div class="">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in erat a ante pharetra lobortis. Etiam ac pharetra sem. Cras congue nulla dui, sit amet luctus ex efficitur id. Vestibulum imperdiet ipsum et volutpat laoreet. Nullam sed tortor dolor. Maecenas interdum at metus dapibus consequat. Vestibulum vitae ipsum quis magna semper ultrices. Praesent pellentesque sed nisi a vestibulum. Integer fermentum lectus et commodo scelerisque.</p>
  
        <div class="btn-group flex items-center pt-7">
          <x-button
            class="mb-4 md:mb-0 mr-4"
            text="Boka samtal"
            url="#"
          />
        </div>
      </div>
      </div>

  </x-content-wrapper>
</x-section>