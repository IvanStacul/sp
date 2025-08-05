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
          Hotelería y Gastronomía
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
            ¿Buscás un lugar para comer o alojarte?
          </h3>

          <h2 class="text-3xl font-bold md:text-4xl">Hotelería y Gastronomía</h2>
        </div>

        <p class="text-lg !text-gray-800">
          Sáenz Peña cuenta con varios restaurantes y hoteles que ofrecen una variedad de opciones gastronómicas y de
          alojamiento para los visitantes. Aquí te dejamos una lista de los principales lugares para comer y alojarse
          disponibles en la ciudad.
        </p>

        {{-- Tabs Navigation --}}
        <div class="border-b border-gray-200">
          <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            <button onclick="showTab('gastronomia')" id="tab-gastronomia"
              class="tab-button active border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
              <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 inline" fill="currentColor">
                <rect x="0" fill="none" width="20" height="20" />
                <g>
                  <path d="M7 4.5c-.3 0-.5.3-.5.5v2.5h-1V5c0-.3-.2-.5-.5-.5s-.5.3-.5.5v2.5h-1V5c0-.3-.2-.5-.5-.5s-.5.3-.5.5v3.3c0 .9.7 1.6 1.5 1.7v7c0 .6.4 1 1 1s1-.4 1-1v-7c.8-.1 1.5-.8 1.5-1.7V5c0-.2-.2-.5-.5-.5zM9 5v6h1v6c0 .6.4 1 1 1s1-.4 1-1V2c-1.7 0-3 1.3-3 3zm7-1c-1.4 0-2.5 1.5-2.5 3.3-.1 1.2.5 2.3 1.5 3V17c0 .6.4 1 1 1s1-.4 1-1v-6.7c1-.7 1.6-1.8 1.5-3C18.5 5.5 17.4 4 16 4z" />
                </g>
              </svg>
              Gastronomía
            </button>
            <button onclick="showTab('hoteles')" id="tab-hoteles"
              class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
              <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                </path>
              </svg>
              Hoteles
            </button>
          </nav>
        </div>

        {{-- Gastronomía Tab Content --}}
        <div id="content-gastronomia" class="tab-content">
          <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Gastronomía</h3>
            <p class="text-gray-600">Descubre los mejores restaurantes, bares y lugares para disfrutar de la gastronomía
              local en Sáenz Peña.</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">IL TANO PASTAS</h3>
                <p class="mt-2 text-gray-500">
                  9 DE JULIO 650 - Bº CENTRO
                </p>
              </div>

              {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button onclick="openModal('aconcagua-modal')"
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
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
                <h3 class="text-xl font-semibold text-gray-800">BEL Y ZAMI</h3>
                <p class="mt-2 text-gray-500">
                  AVENIDA 33 ENTRE 26 Y 28
                </p>
              </div>

              {{-- <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
              <button onclick="openModal('belzami-modal')"
                class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
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
                  ROJO BAR
                </h3>
                <p class="mt-2 text-gray-500 ">
                  AVENIDA 33 ENTRE 26 Y 28
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
                  CULLEN HARRISON
                </h3>
                <p class="mt-2 text-gray-500 ">
                  AV. 2 CASI AV. 1 - Bº CENTRO
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
                  SHADAY
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CALLES 12 Y 23 - Bº CENTRO
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
                  BEER GARDEN
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CALLE 9 ESQUINA 16
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
                  AMERICAN DINER
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CALLE 12 ENTRE 21 Y 23
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
                  ROQUE HOUSE RESTOBAR
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CALLE 13 ENTRE 16 Y 18 - Bº CENTRO
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
                  ESQUINA DORREGO
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CALLE 14 ENTRE 17 Y 19 - Bº CENTRO
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
                  PARRILLA LA TABITA
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CDTE. FERNANDEZ 604 - ENSANCHE SUR
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
                  VIDA FELIZ
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CDTE. FERNANDEZ 604 - ENSANCHE SUR
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
                  CONFITERIA Y COMEDOR GUALOK
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CALLE 12 ENTRE 23 Y 25
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
                  PARRILLA EL CHÚCARO
                </h3>
                <p class="mt-2 text-gray-500 ">
                  CALLE 9 Y AV 2 - B° MONSEÑOR DE CARLO
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
                  CONFITERÍA LA ROTONDA
                </h3>
                <p class="mt-2 text-gray-500 ">
                  RUTA 16 Y 95
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
                  CARRITO BAR LIDIA
                </h3>
                <p class="mt-2 text-gray-500 ">
                  RUTA 16 Y 95
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

        {{-- Hoteles Tab Content --}}
        <div id="content-hoteles" class="tab-content hidden">
          <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Hoteles</h3>
            <p class="text-gray-600">Encuentra los mejores hoteles y opciones de alojamiento en Sáenz Peña para tu
              estadía.</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel Aconcagua
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Azcuénaga y Julio Roca (calle 14 esq.3) Ensanche Sur
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364 - 4428111
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('aconcagua-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>
                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel Orel
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Saavedra (3) y San Martín (12)
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364 - 4429645 / 4662725
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('orel-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel A.MU.DO.CH
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Belgrano 737 (calle 10 entre 15 y 17 - Centro)
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364- 4431072
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('amudoch-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel IL Colono
                </h3>
                <p class="mt-2 text-gray-500 ">
                  calle 12 entre 15 y 17
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364-4666016 / 4420626
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('ilcolono-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>
                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel Apart
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Saavedra 268 (calle 3 entre 6 y 8)
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364- 4423411
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('apart-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel Luz
                </h3>
                <p class="mt-2 text-gray-500 ">
                  San Martín 771 (calle 12 entre 15 y 17)
                </p>
                <p class="mt-2 text-gray-500 ">
                  0364-4785356
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('luz-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel Avenida
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Av. 2 entre 9 y 11
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364-4421392
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('avenida-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel Riposo
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Ruta 16 km 175 (Calle 6 entre 5 y 7)
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364-4437016
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('riposo-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Albergue La Esperanza
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Calle 51
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364-4420809
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('la-esperanza-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Centro de la Espiritualidad
                </h3>
                <p class="mt-2 text-gray-500 ">
                  Ruta 16 km4
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364-743482
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('centro-espiritualidad-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>

                  Detalles
                </button>
              </div>
            </div>

            <div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl">
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800">
                  Hotel Atrium Gualok
                </h3>
                <p class="mt-2 text-gray-500 ">
                  San Martín 1198 ( calle 12 esq. 15)
                </p>
                <p class="mt-2 text-gray-500 ">
                  Teléfono: 0364-4420500 / 4430036
                </p>
              </div>

              <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                <button onclick="openModal('atrium-gualok-modal')"
                  class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-gray-100 align-middle hover:bg-gray-200 text-sm sm:p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                    </path>
                  </svg>
                  Detalles
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>

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

      // Initialize with gastronomia tab active
      document.addEventListener('DOMContentLoaded', function() {
        showTab('gastronomia');
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
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }
    </style>

    <!-- Modales -->
    <x-simple-modal id="aconcagua-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel Aconcagua
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14245.621266117265!2d-60.445286!3d-26.79522!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412cdfa8cbef6d%3A0xb0b6afa83d621fe5!2sHotel%20Aconcagua!5e0!3m2!1ses-419!2sus!4v1753902084160!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>


              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Azcuénaga y Julio Roca ( calle 14 esq.3) Ensanche Sur
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4428111
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Celular
                      </h5>
                      <p class="text-gray-800">
                        3644-385542
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        hotel-aconcagua@hotmail.com
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hotel / Categoría 3
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        110
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        67
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Wifi / Garaje / AA / Baño Privado / Ascensor / TV / Piscina / Desayuno / Parrilla / Jardín /
                        Admisión de mascotas
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('aconcagua-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="orel-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel Orel
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14246.002971353026!2d-60.442377!3d-26.79218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1f9ecf5615%3A0x27f5b08621d3034f!2sHotel%20Orel!5e0!3m2!1ses-419!2sus!4v1753973402297!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe>
              </div>


              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Saavedra (3) y San Martín (12)
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4429645 / 4662725
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        jfmalina@yahoo.com.ar
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hotel / Categoría 2
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        100
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        40
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Garaje / Internet / TV / WIFI / Calefacción / Desayuno
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('orel-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="amudoch-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel A.MU.DO.CH
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14246.750570481643!2d-60.43848799999999!3d-26.786225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1ebc8b313d%3A0x854b15a74198896b!2sHotel%20Amudoch!5e0!3m2!1ses-419!2sus!4v1753973473481!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Belgrano 737 (calle 10 entre 15 y 17 - Centro)
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4431072
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Celular
                      </h5>
                      <p class="text-gray-800">
                        3644550144
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        saenzpena@amudoch.com
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hotel / Categoría 2
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        50
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        20
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Wifi / Frigobar / AA / Baño privado / Lavandería / Planchado / Jardín / Accesibilidad para
                        discapacitados
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('amudoch-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="ilcolono-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel IL Colono
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14246.815970237929!2d-60.439506!3d-26.785704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412df8750f386d%3A0xd401ee76c2d1595c!2sHotel%20El%20Colono!5e0!3m2!1ses-419!2sus!4v1753973522193!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>


              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        calle 12 entre 15 y 17
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4666016 / 4420626
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        mamagla@hotmail.com
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Residencial / Categoría B
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        23
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        9
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Garage / Internet / Desayuno / Restaurante
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('ilcolono-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="apart-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel Apart
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14245.844643884215!2d-60.439895!3d-26.793441!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d21b34fa449%3A0x11a3aef44f1ac5b1!2sHotel%20Apart!5e0!3m2!1ses-419!2sus!4v1753973565624!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Saavedra 268 (calle 3 entre 6 y 8)
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4423411
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Celular
                      </h5>
                      <p class="text-gray-800">
                        3644-222117
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        aparthotelsp@hotmail.com
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Apart-Hotel / Categoría B
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        40
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        18
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Cocina totalmente equipada/ Wifi / Tv / Desayuno / Ascensor / Frigobar / Garage / Gimnasio
                        Independiente
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('apart-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="luz-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel Luz
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3561.7076328129333!2d-60.43946300000001!3d-26.785588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1d295dcf85%3A0xb89e9b6f9df93a69!2sHotel%20Luz!5e0!3m2!1ses-419!2sus!4v1753973606278!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        San Martín 771 (calle 12 entre 15 y 17)
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4785356
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Celular
                      </h5>
                      <p class="text-gray-800">
                        3644-4304865
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        No disponible
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hotel
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        No disponible
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        No disponible
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        No disponible
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('luz-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="avenida-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel Avenida
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14246.157274355493!2d-60.43503200000001!3d-26.790951!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d22714c252d%3A0x1df1529a75f302!2sHotel%20Avenida!5e0!3m2!1ses-419!2sus!4v1753973642006!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>


              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Av. 2 entre 9 y 11
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4421392
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        monicaleonah@gmail.com
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hotel / Categoría 3
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        32
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        18
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Garage / Internet / Tv / Desayuno
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('avenida-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="riposo-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel Riposo
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7121.499109454367!2d-60.409434!3d-26.816102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9446d2b01349b291%3A0x87c1b70d5c1414ef!2sHotel%20Riposo!5e0!3m2!1ses-419!2sar!4v1753973677899!5m2!1ses-419!2sar"
                  width="100%" height="192px" frameborder="0"></iframe></div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Ruta 16 km 175 (Calle 6 entre 5 y 7)
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4437016
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        richarddetter@hotmail.com.ar
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hotel / Categoría 2
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        29
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        12
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Garage / Internet / Desayuno / TV / Lavandería / Calefacción
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('riposo-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="la-esperanza-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Albergue La Esperanza
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14248.350329600242!2d-60.417502000000006!3d-26.773478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412ddf37a4a6df%3A0xb60d76ea4fc9fbcb!2sMotoposada-Hostal%20Esperanza-%20%22Su%20hogar%20lejos%20de%20casa%22.%20Descuento%20a%20Familias.Wifi.%2410.000%20x%20d%C3%ADa.!5e0!3m2!1ses-419!2sus!4v1753973720148!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Calle 51
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4420809
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        No disponible
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Albergue
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        55
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        No disponible
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        No disponible
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('la-esperanza-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="centro-espiritualidad-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Centro de la Espiritualidad
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14243.604971465433!2d-60.423589!3d-26.811273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9446d2cb11850d2f%3A0x640bb81a92ec9e27!2sCentro%20de%20Espiritualidad!5e0!3m2!1ses-419!2sus!4v1753973759007!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        Ruta 16 km 4 Colectora Sur
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-743482
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        nosasergio@yahoo.com.ar
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hospedaje
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        126
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        52
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Desayuno / Almuerzo / Merienda / Cena
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('centro-espiritualidad-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>

    <x-simple-modal id="atrium-gualok-modal">
      <div x-model="activeItem" class="flex flex-col bg-white border shadow-sm rounded-xl pt-6 px-6">

        <div class="overflow-y-auto">
          <div>
            <span class="pt-3 px-4 block text-3xl font-bold text-gray-800">
              Hotel Atrium Gualok
            </span>
            <div class="py-3 px-4 text-sm text-gray-600">

              <div id="map" class="h-48 w-full bg-gray-100 rounded-md mb-6"><iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14247.37426798969!2d-60.43794700000001!3d-26.781256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1cbaae0f69%3A0x810389ae7a3aaf81!2sHotel%20Gualok!5e0!3m2!1ses-419!2sus!4v1753973791373!5m2!1ses-419!2sus"
                  width="100%" height="192px" frameborder="0"></iframe></div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="sm:grid sm:grid-cols-5">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Contacto
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Dirección
                      </h5>
                      <p class="text-gray-800">
                        San Martín 1198 (calle 12 esq. 15)
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Teléfono
                      </h5>
                      <p class="text-gray-800">
                        0364-4420500 / 4430036
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Email
                      </h5>
                      <p class="text-gray-800">
                        reservas@atriumgualok.com.ar
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Tipo de Establecimiento
                      </h5>
                      <p class="text-gray-800">
                        Hotel / Categoría 4
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <div class="border p-4 rounded-lg space-y-4">
                  <div class="">
                    <div class="sm:col-span-2 text-xl font-bold text-gray-700">
                      Capacidad de Alojamiento
                    </div>
                  </div>

                  <div class="hidden sm:block border-b"></div>

                  <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Cantidad de Plazas
                      </h5>
                      <p class="text-gray-800">
                        180
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Habitaciones
                      </h5>
                      <p class="text-gray-800">
                        90
                      </p>
                    </div>

                    <div class="col-span-full">
                      <h5 class="text-sm font-semibold text-gray-700 uppercase">
                        Servicios
                      </h5>
                      <p class="text-gray-800">
                        Garaje / Internet / Piscina / Desayuno
                      </p>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
          <button type="button" onclick="closeModal('atrium-gualok-modal')"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150">
            Cerrar
          </button>
        </div>
      </div>
    </x-simple-modal>
  </section>
@endsection
