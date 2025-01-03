@extends('pages.layouts.base')

@section('hero')
  <div class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="https://v0.dev/placeholder.svg?height=400&width=1200" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <!-- overlay - start -->
    <!-- <div class="absolute inset-0 bg-green-400 mix-blend-multiply"></div> -->
    <!-- overlay - end -->

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-7xl text-gray-800 md:mb-8">
          Servicios
        </h2>
      </div>

      <div>
        <p class="text-xl">
          En esta sección vas a encontrar una herramienta útil que te permitirá acceder a toda la información necesaria
          para obtener los servicios que ofrece la municipalidad.
        </p>
      </div>
    </div>
  </div>
@endsection

@section('base')
<section id="servicios" class="text-gray-50 px-8 antialiased md:px-16 pt-8">
  <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
      <div
        class="mb-4 items-center justify-between pb-4 text-gray-900 border-gray-800 md:mb-8 md:flex md:border-b md:pb-8">
        <h2 class="text-center text-xl font-semibold text-gray-900 sm:mb-0 sm:text-3xl">
          Servicios
        </h2>
      </div>

      <div
        class="mb-8 grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:mb-0 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6">
        <a href="{{ route('services.luminarias') }}" class="group text-center">
          <div
            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
            <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 12a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1M5 12h14M5 12a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1m-2 3h.01M14 15h.01M17 9h.01M14 9h.01">
              </path>
            </svg>
          </div>
          <p class="text-lg font-semibold text-gray-900 group-hover:underline">
            Cambios de luminarias
          </p>
        </a>

        <a href="#" class="group text-center">
          <div
            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
            <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z">
              </path>
            </svg>
          </div>
          <p class="text-lg font-semibold text-gray-900 group-hover:underline">
            SEM
          </p>
        </a>

        <a href="#" class="group text-center">
          <div
            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
            <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 16H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v1M9 12H4m8 8V9h8v11h-8Zm0 0H9m8-4a1 1 0 1 0-2 0 1 1 0 0 0 2 0Z">
              </path>
            </svg>
          </div>
          <p class="text-lg font-semibold text-gray-900 group-hover:underline">
            Recolección de residuos
          </p>
        </a>

        <a href="#" class="group text-center">
          <div
            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
            <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z">
              </path>
            </svg>
          </div>
          <p class="text-lg font-semibold text-gray-900 group-hover:underline">
            Poda responsable
          </p>
        </a>

        <a href="#" class="group text-center">
          <div
            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
            <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z">
              </path>
            </svg>
          </div>
          <p class="text-lg font-semibold text-gray-900 group-hover:underline">
            Turnos para dirección de tierras
          </p>
        </a>

        <a href="#" class="group text-center">
          <div
            class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
            <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16.872 9.687 20 6.56 17.44 4 4 17.44 6.56 20 16.873 9.687Zm0 0-2.56-2.56M6 7v2m0 0v2m0-2H4m2 0h2m7 7v2m0 0v2m0-2h-2m2 0h2M8 4h.01v.01H8V4Zm2 2h.01v.01H10V6Zm2-2h.01v.01H12V4Zm8 8h.01v.01H20V12Zm-2 2h.01v.01H18V14Zm2 2h.01v.01H20V16Z">
              </path>
            </svg>
          </div>
          <p class="text-lg font-semibold text-gray-900 group-hover:underline">
            Veredas
          </p>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
