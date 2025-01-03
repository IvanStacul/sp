@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="https://v0.dev/placeholder.svg?height=400&width=1200" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <!-- overlay - start -->
    <!-- <div class="absolute inset-0 bg-green-400 mix-blend-multiply"></div> -->
    <!-- overlay - end -->

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-800 md:mb-8">
          Secretaría de Gobierno y Modernización
        </h2>
      </div>

      <div>
        <p class="text-xl">
          La Secretaría de Gobierno y Modernización es la encargada de coordinar las políticas públicas y de modernizar
          la gestión municipal. A través de esta secretaría, se busca mejorar la calidad de vida de los ciudadanos y
          ciudadanas de Sáenz Peña. En esta sección, vas a conocer quién es el secretario y cuál es su función en la
          administración municipal.
        </p>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-7xl">
      <div class="space-y-5 md:space-y-8">
        {{-- Funciones --}}
        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="mx-auto">
            <div class="md:flex md:flex-row md:gap-8 md:items-center md:justify-center">
              <div class="md:flex-shrink-0 ">
                <img
                  src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&amp;q=75&amp;fit=crop&amp;crop=top&amp;w=600&amp;h=700"
                  alt="Foto del funcionario" class="h-48 w-full object-cover md:w-48 rounded-lg">
              </div>

              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Secretaría de Gobierno y Modernización</div>
                <h2 class="mt-2 text-2xl font-bold">Diego Landriscina</h2>
                <p class="mt-2 text-gray-500">Secretario de Gobierno</p>
                <p class="mt-4">Dirección: Mariano Moreno 801, Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Subsecretarías (lista de nombre de subsecretarías, sólo texto) --}}
        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <div class="border-b border-gray-200 dark:border-neutral-700">
                <nav class="flex gap-x-1 font-medium" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                  <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="tabs-with-underline-item-1" aria-selected="true" data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1" role="tab">
                    Subsecretarías
                  </button>
                  <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="tabs-with-underline-item-2" aria-selected="false" data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2" role="tab">
                    Funciones
                  </button>
                </nav>
              </div>

              <div class="mt-3">
                <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                  <ul class="list-disc list-inside font-normal text-gray-600">
                    <li>Subsecretaría de Modernización</li>
                    <li>Subsecretaría de Participación Ciudadana</li>
                    <li>Subsecretaría de Asuntos Legales</li>
                    <li>Subsecretaría de Desarrollo Social</li>
                  </ul>
                </div>
                <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
