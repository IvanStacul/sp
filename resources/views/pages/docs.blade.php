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
          Documentos Oficiales y Resoluciones
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section id="news" class="text-gray-50 px-8 antialiased md:px-16">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        @if ($docs->count() > 0)
          @foreach ($docs->groupBy('document_category_id') as $groupedDocs)
            <div class="hs-accordion-group">
              <div class="hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg"
                id="hs-bordered-heading-{{ $groupedDocs->first()->category->id }}">
                <button
                  class="hs-accordion-toggle inline-flex items-center gap-x-3 w-full font-semibold text-start text-white py-4 px-5 hover:text-white disabled:opacity-50 disabled:pointer-events-none bg-green-500"
                  aria-expanded="false"
                  aria-controls="hs-basic-bordered-collapse-{{ $groupedDocs->first()->category->id }}">
                  <svg class="icon-plus block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                  </svg>
                  <svg class="icon-minus hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                  </svg>
                  {{ $groupedDocs->first()->category->name }}
                </button>

                <div id="hs-basic-bordered-collapse-{{ $groupedDocs->first()->category->id }}"
                  class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region"
                  aria-labelledby="hs-bordered-heading-{{ $groupedDocs->first()->category->id }}">
                  <div class="py-4 px-5">
                    <ul class="space-y-3">
                      @foreach ($groupedDocs as $doc)
                        <li>
                          <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                            class="text-lg font-semibold text-green-800 hover:!text-green-900">
                            {{ $doc->title }}
                          </a>
                          @if ($doc->description)
                            <p class="text-sm text-gray-600">{{ $doc->description }}</p>
                          @endif
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Lo sentimos!</strong>
            <span class="block sm:inline">No hay documentos disponibles.</span>
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

          // Alternar iconos
          const iconPlus = toggle.querySelector('.icon-plus');
          const iconMinus = toggle.querySelector('.icon-minus');
          if (!isExpanded) {
            iconPlus.classList.add('hidden');
            iconMinus.classList.remove('hidden');
          } else {
            iconPlus.classList.remove('hidden');
            iconMinus.classList.add('hidden');
          }

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


    });
  </script>
@endpush
