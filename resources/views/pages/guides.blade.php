@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/documentos-oficiales.webp') }}" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-5xl text-gray-50 font-bold md:mb-8 xl:text-6xl 2xl:text-7xl">
          Guias de tramites
        </h2>
      </div>
    </div>
  </div>
@endsection


@section('base')
  <section class="text-gray-800 px-8 antialiased md:px-16">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        @if ($guides->count() > 0)
          {{-- 1) Agrupamos guías por categoría --}}
          @foreach ($guides->groupBy('guide_category_id') as $groupedGuides)
            {{-- 2) Título estático de la categoría --}}
            <div class="mb-8">
              <h2 class="text-2xl font-bold mb-4">
                {{ $groupedGuides->first()->category->name }}
              </h2>

              {{-- 3) Dentro de la categoría, cada guía es un desplegable (accordion) --}}
              <div class="hs-accordion-group space-y-2">
                @foreach ($groupedGuides as $guide)
                  <div class="hs-accordion bg-white border rounded-lg"
                       id="accordion-guide-{{ $guide->id }}">
                    <button
                      class="hs-accordion-toggle inline-flex items-center gap-x-3 w-full font-semibold text-start text-white py-4 px-5 bg-green-500 hover:text-white"
                      aria-expanded="false"
                      aria-controls="accordion-content-{{ $guide->id }}">

                      {{-- Aquí podrías usar $guide->title o algún campo que tengas como "nombre de la guía" --}}
                      {{ $guide->title ?? 'Título de la guía' }}
                    </button>

                    <div id="accordion-content-{{ $guide->id }}"
                         class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                         aria-labelledby="accordion-guide-{{ $guide->id }}">
                      <div class="py-4 px-5">
                        @php
                          $json = json_decode($guide->content, true);
                          $blocks = $json['blocks'] ?? [];

                          $processedBlocks = [];
                          $currentImageGroup = [];

                          // Procesa bloques para agrupar imágenes
                          foreach ($blocks as $block) {
                              if ($block['type'] === 'image') {
                                  $currentImageGroup[] = $block;
                              } else {
                                  if (!empty($currentImageGroup)) {
                                      $processedBlocks[] = [
                                          'type'   => 'imageGroup',
                                          'blocks' => $currentImageGroup
                                      ];
                                      $currentImageGroup = [];
                                  }
                                  $processedBlocks[] = $block;
                              }
                          }

                          if (!empty($currentImageGroup)) {
                              $processedBlocks[] = [
                                  'type'   => 'imageGroup',
                                  'blocks' => $currentImageGroup
                              ];
                          }
                        @endphp

                        {{-- Render de cada bloque (texto o imágenes) --}}
                        @foreach ($processedBlocks as $block)
                          @if ($block['type'] === 'imageGroup')
                            @php
                              $imageCount = count($block['blocks']);
                            @endphp
                            <div id="image-gallery">
                              {{-- Aquí tu misma lógica para 1, 2, 3 o más imágenes --}}
                              @if ($imageCount === 1 || $imageCount === 2)
                                <div class="space-y-4">
                                  @foreach ($block['blocks'] as $imageBlock)
                                    {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                                  @endforeach
                                </div>
                              @elseif ($imageCount === 3)
                                <div class="grid gap-3 lg:grid-cols-2">
                                  <div class="grid grid-cols-2 gap-3 lg:grid-cols-1">
                                    @foreach (array_slice($block['blocks'], 0, 2) as $imageBlock)
                                      {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                                    @endforeach
                                  </div>
                                  @php $imageBlock = $block['blocks'][2]; @endphp
                                  {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                                </div>
                              @elseif ($imageCount > 3)
                                <div class="grid gap-3 lg:grid-cols-2">
                                  <div class="grid grid-cols-2 gap-3 lg:grid-cols-1">
                                    @foreach (array_slice($block['blocks'], 0, 2) as $imageBlock)
                                      {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                                    @endforeach
                                  </div>
                                  @php $imageBlock = $block['blocks'][2]; @endphp
                                  <figure class="relative h-72 w-full sm:h-96 lg:h-full"
                                          data-fancybox="gallery"
                                          data-src="{{ $imageBlock['data']['file']['url'] }}">
                                    <img class="absolute left-0 top-0 w-full h-full rounded-xl object-cover"
                                         src="{{ $imageBlock['data']['file']['url'] }}"
                                         alt="{{ $imageBlock['data']['caption'] }}" />
                                    @if (!empty($imageBlock['data']['caption']))
                                      <figcaption class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white text-sm p-2">
                                        {{ $imageBlock['data']['caption'] }}
                                      </figcaption>
                                    @endif
                                  </figure>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                                  @foreach (array_slice($block['blocks'], 3) as $imageBlock)
                                    {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                                  @endforeach
                                </div>
                              @endif
                            </div>
                          @else
                            {{ \App\View\Components\Editorjs\Factory::make($block)->render() }}
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                @endforeach
              </div> <!-- Fin .hs-accordion-group -->
            </div>
          @endforeach
        @else
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Lo sentimos!</strong>
            <span class="block sm:inline">No hay guías de trámites disponibles.</span>
          </div>
        @endif
      </div>
    </div>
  </section>
@endsection


@push('scripts')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const accordions = document.querySelectorAll('.hs-accordion');

      accordions.forEach(accordion => {
        const toggle = accordion.querySelector('.hs-accordion-toggle');
        const content = accordion.querySelector('.hs-accordion-content');

        // Inicializar: si está expandido, medir la altura, sino establecer en 0.
        if (toggle.getAttribute('aria-expanded') === 'true') {
          content.style.height = content.scrollHeight + 'px';
        } else {
          content.style.height = '0';
        }

        toggle.addEventListener('click', function() {
          const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

          // Toggle del atributo aria-expanded y la clase "active"
          toggle.setAttribute('aria-expanded', !isExpanded);
          accordion.classList.toggle('active', !isExpanded);

          if (isExpanded) {
            // Cerrar: se fija la altura actual para luego transicionar a 0
            content.style.height = content.scrollHeight + 'px';
            requestAnimationFrame(() => {
              content.style.height = '0';
            });
          } else {
            // Abrir: se quita posible clase "hidden" y se transiciona a la altura completa
            content.classList.remove('hidden');
            content.style.height = content.scrollHeight + 'px';
          }
        });

        // Al terminar la transición se limpia la altura si está abierto
        content.addEventListener('transitionend', function() {
          if (toggle.getAttribute('aria-expanded') === 'true') {
            content.style.height = 'auto';
          }
        });
      });

      const links = document.querySelectorAll('section.text-gray-800.px-8.antialiased.md\\:px-16 a');
      links.forEach(link => {
        link.classList.add('text-green-600', 'hover:underline', 'hover:text-green-700');
      });

      // agregar un background gris claro a los h1, h2, h3, h4 dentro de div hs-accordion-group space-y-2
      const headings = document.querySelectorAll('div.hs-accordion-group.space-y-2 h1, div.hs-accordion-group.space-y-2 h2, div.hs-accordion-group.space-y-2 h3, div.hs-accordion-group.space-y-2 h4');
      headings.forEach(heading => {
        heading.classList.add('bg-gray-100', 'p-2', 'rounded');
      });
    });
  </script>
@endpush
