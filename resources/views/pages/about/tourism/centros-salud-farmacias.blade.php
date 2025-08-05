@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/banner_turismo.webp') }}" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-5xl text-gray-50 font-bold md:mb-8 xl:text-6xl 2xl:text-7xl">
          Centros de Salud y Farmacias
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-5xl">
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h3 class="text-xl font-semibold md:text-2xl">
            ¿Necesitás atención médica?
          </h3>

          <h2 class="text-3xl font-bold md:text-4xl">Centros de Salud y Farmacias</h2>
        </div>

        <p class="text-lg !text-gray-800">
          Sáenz Peña cuenta con varios centros de salud y farmacias que brindan atención médica y servicios farmacéuticos
          a la comunidad. Aquí te dejamos una lista de los principales centros de salud y farmacias disponibles en la
          ciudad.
        </p>

        {{-- Tabs Navigation --}}
        <div class="border-b border-gray-200">
          <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            <button onclick="showTab('farmacias')" id="tab-farmacias" class="tab-button active border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
              <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
              Farmacias
            </button>
            <button onclick="showTab('centros')" id="tab-centros" class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
              <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Centros de Salud
            </button>
          </nav>
        </div>

        {{-- Farmacias Tab Content --}}
        <div id="content-farmacias" class="tab-content">
          <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Farmacias</h3>
            <p class="text-gray-600">Encuentra las farmacias disponibles en Sáenz Peña para tus necesidades farmacéuticas.</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">FARMACIA TRANCHET S.R.L.</h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 202 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">FARMACIA VEDIA S.C.C.</h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 402 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                FARMACITY S.A.
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 131 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">FARMACIA ITATI S.H.</h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 502 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">FARMACIA VEDIA S.C.S</h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 901 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">FARMACIA ITATI II SRL</h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 1300 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">A.M.E.B.</h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 100 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">FARMACIA CATEDRAL S.C.C.</h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                San Martín Nº 66 Bº CENTRO
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>
          </div>
        </div>

        {{-- Centros de Salud Tab Content --}}
        <div id="content-centros" class="tab-content hidden">
          <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Centros de Salud</h3>
            <p class="text-gray-600">Consulta los centros médicos y hospitales disponibles para atención médica especializada.</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                CLÍNICA AVENIDA
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Av. Sarmiento 259
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Teléfono: 0364 442-1925
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                MAMOTEST - Clínica ginecológica
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Laprida 472
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Teléfono: 0364 443-0131
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                INSTITUTO PRIVADO SANTA MARÍA
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Chacabuco 634
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Teléfono: 0364 443-9100
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                CLÍNICA CENTRO MEDICO S.R.L
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Laprida 795
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Teléfono: 0364 442-9211
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                UME Unidad Médica Educativa
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Comandante Fernández 755
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                0364 442-6628
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                SIAPA (Servicio Integral Amigable Para Adolescentes)
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Calle 5 entre 12 y 14 - Bº Centro
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                0362 475-8320
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                POLICONSULTORIOS INSTITUTO PRIVADO SANTA MARÍA S.R.L.
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Chacabuco 556
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Teléfono: 0364 460-3952
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                SANATORIO MAYO - Salud Mental
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Belgrano 101
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Teléfono: 0364 442-1433
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>

          <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="p-4 md:p-6">
              <h3 class="text-xl font-semibold text-gray-800">
                HOSPITAL 4 DE JUNIO - Dr. Ramón Carrillo
              </h3>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Av. Malvinas Argentinas 1350
              </p>
              <p class="mt-2 text-gray-500 dark:text-neutral-400">
                Teléfono: 0364 443-1861
              </p>
            </div>

            {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                  </path>
                </svg>

                Detalles
              </button>
            </div> --}}
          </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>

  {{-- JavaScript for Tabs --}}
  <script>
    function showTab(tabName) {
      // Hide all tab contents
      const tabContents = document.querySelectorAll('.tab-content');
      tabContents.forEach(content => {
        content.classList.add('hidden');
      });

      // Remove active class from all tabs
      const tabButtons = document.querySelectorAll('.tab-button');
      tabButtons.forEach(button => {
        button.classList.remove('active');
        button.classList.remove('border-blue-500', 'text-blue-600');
        button.classList.add('border-transparent', 'text-gray-500');
      });

      // Show selected tab content
      document.getElementById('content-' + tabName).classList.remove('hidden');

      // Add active class to selected tab
      const activeTab = document.getElementById('tab-' + tabName);
      activeTab.classList.add('active');
      activeTab.classList.remove('border-transparent', 'text-gray-500');
      activeTab.classList.add('border-blue-500', 'text-blue-600');
    }

    // Initialize with farmacias tab active
    document.addEventListener('DOMContentLoaded', function() {
      showTab('farmacias');
    });
  </script>

  <style>
    .tab-button.active {
      border-color: #3b82f6;
      color: #2563eb;
    }

    .tab-content {
      animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>

@endsection
