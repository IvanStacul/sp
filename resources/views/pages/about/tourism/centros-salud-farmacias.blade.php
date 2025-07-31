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
  </section>

@endsection
