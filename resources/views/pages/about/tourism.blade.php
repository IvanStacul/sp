@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/banner_turismo.webp') }}" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8">
          Turismo
        </h2>
      </div>

      <div>
        <p class="text-xl text-gray-50">
          En esta sección podes obtener datos y detalles acerca de las actividades turísticas que se llevan a cabo en nuestra ciudad.
        </p>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <div class="py-8 sm:py-16 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <!-- Grid Container -->
      <div class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-4">

        <!-- Card 1: Ciudad de los niños -->
        <a href="{{ route('pages.about.tourism.detail', 'ciudad-ninos') }}"
          class="group relative overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
          <div
            class="flex h-full flex-col justify-between gap-x-6 bg-gradient-to-br from-slate-500 to-slate-300 p-7 relative">
            <img src="{{ asset('assets/img/turismo/ciudad_ninos.webp') }}" alt="Ciudad de los niños"
              class="absolute inset-0 h-full w-full object-cover rounded-3xl">
            <div
              class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
            </div>
            <div class="relative z-10 flex flex-col justify-end h-full">
              <h3 class="text-2xl font-semibold text-white">Ciudad de los niños</h3>
            </div>
          </div>
        </a>

        <!-- Card 2: Termas (Grande) -->
        <a href="{{ route('pages.about.tourism.detail', 'termas') }}"
          class="group relative lg:col-span-2 overflow-hidden rounded-2xl transition-transform duration-300 hover:scale-105">
          <div class="relative bg-white h-full min-h-[300px]">
            <img src="{{ asset('assets/img/turismo/termas.webp') }}" alt="Termas"
              class="absolute inset-0 h-full w-full object-cover rounded-2xl">
            <div
              class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-20 transition-all duration-300 rounded-2xl">
            </div>
            <div class="relative z-10 flex h-full rounded-2xl p-7 text-center items-center justify-center">
              <h2 class="text-4xl leading-[normal] font-bold text-white">
                Termas
              </h2>
            </div>
          </div>
        </a>

        <!-- Card 3: Casa Cruz (Columna con 2 elementos) -->
        <div class="flex h-full flex-col gap-7">
          <!-- Casa Cruz -->
          <a href="{{ route('pages.about.tourism.detail', 'casa-cruz') }}"
            class="group relative overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
            <div
              class="flex flex-col items-center justify-center gap-4 rounded-3xl p-7 bg-gradient-to-br from-slate-500 to-slate-300 relative min-h-[150px]">
              <img src="{{ asset('assets/img/turismo/casa_cruz.webp') }}" alt="Casa Cruz"
                class="absolute inset-0 h-full w-full object-cover rounded-3xl">
              <div
                class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
              </div>
              <div class="relative z-10 text-center">
                <h3 class="text-xl font-semibold text-white">Casa Cruz</h3>
              </div>
            </div>
          </a>

          <!-- Museos Históricos -->
          <a href="{{ route('pages.about.tourism.detail', 'museos-historicos') }}"
            class="group relative overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
            <div
              class="relative flex h-60 flex-col items-center justify-center rounded-3xl bg-gradient-to-br from-slate-500 to-slate-300 p-7 text-center">
              <img src="{{ asset('assets/img/turismo/museo.webp') }}" alt="Museos Históricos"
                class="absolute inset-0 h-full w-full object-cover rounded-3xl">
              <div
                class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
              </div>
              <div class="relative z-10">
                <h3 class="text-2xl font-semibold text-white">Museos Históricos</h3>
              </div>
            </div>
          </a>
        </div>

        <!-- Card 4: Centros de Salud y Farmacias / Cine municipal (Columna con 2 elementos) -->
        <div class="flex h-full flex-col gap-7">
          <!-- Centros de Salud y Farmacias -->
          <a href="{{ route('pages.about.tourism.detail', 'centros-salud-farmacias') }}"
            class="group relative overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
            <div
              class="relative flex flex-col items-center justify-between gap-9 rounded-3xl bg-gradient-to-br from-slate-500 to-slate-300 p-7 text-center min-h-[200px]">
              <img src="{{ asset('assets/img/turismo/farmacias.webp') }}" alt="Centros de Salud y Farmacias"
                class="absolute inset-0 h-full w-full object-cover rounded-3xl">
              <div
                class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
              </div>
              <div class="relative z-10 flex flex-col justify-center h-full">
                <h3 class="text-xl font-semibold text-white">Centros de Salud y Farmacias</h3>
              </div>
            </div>
          </a>

          <!-- Cine Municipal -->
          <a href="{{ route('pages.about.tourism.detail', 'cine-municipal') }}"
            class="group relative overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
            <div
              class="relative flex h-full items-center justify-center rounded-3xl bg-gradient-to-br from-slate-500 to-slate-300 p-7">
              <img src="{{ asset('assets/img/turismo/cine.webp') }}" alt="Cine Municipal"
                class="absolute inset-0 h-full w-full object-cover rounded-3xl">
              <div
                class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
              </div>
              <div class="relative z-10">
                <h3 class="text-lg font-semibold text-white">Cine Municipal</h3>
              </div>
            </div>
          </a>
        </div>

        <!-- Card 5: Complejo Ecológico Municipal -->
        <a href="{{ route('pages.about.tourism.detail', 'complejo-ecologico') }}"
          class="group relative overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
          <div
            class="relative flex h-full flex-col justify-center gap-6 overflow-hidden rounded-3xl bg-gradient-to-br from-slate-500 to-slate-300 p-7 max-lg:justify-between">
            <img src="{{ asset('assets/img/turismo/complejo_ecologico.webp') }}" alt="Complejo Ecológico Municipal"
              class="absolute inset-0 h-full w-full object-cover rounded-3xl">
            <div
              class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
            </div>
            <div class="relative z-10">
              <h3 class="text-xl font-semibold text-white">Complejo Ecológico Municipal</h3>
            </div>
          </div>
        </a>

        <!-- Card 6: Hotelería y Gastronomía -->
        <a href="{{ route('pages.about.tourism.detail', 'hoteleria-gastronomia') }}"
          class="group relative overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
          <div
            class="relative flex h-full flex-col justify-center gap-6 overflow-hidden rounded-3xl bg-gradient-to-br from-slate-500 to-slate-300 p-7 max-lg:justify-between lg:text-right">
            <img src="{{ asset('assets/img/turismo/gastronomia.webp') }}" alt="Hotelería y Gastronomía"
              class="absolute inset-0 h-full w-full object-cover rounded-3xl">
            <div
              class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
            </div>
            <div class="relative z-10">
              <h3 class="text-xl font-semibold text-white">Hotelería y Gastronomía</h3>
            </div>
          </div>
        </a>

        <!-- Card 7: Camping Municipal (Ancha) -->
        <a href="{{ route('pages.about.tourism.detail', 'camping-municipal') }}"
          class="group relative max-lg:col-span-2 max-md:col-span-1 overflow-hidden rounded-3xl transition-transform duration-300 hover:scale-105">
          <div
            class="flex h-full flex-col justify-between gap-5 overflow-hidden rounded-3xl bg-gradient-to-br from-slate-500 to-slate-300 p-7">
            <img src="{{ asset('assets/img/turismo/camping.webp') }}" alt="Camping Municipal"
              class="absolute inset-0 h-full w-full object-cover rounded-3xl">
            <div
              class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-30 transition-all duration-300 rounded-3xl">
            </div>
            <div class="relative z-10">
              <h3 class="text-2xl font-semibold text-white">Camping Municipal</h3>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div>
@endsection
