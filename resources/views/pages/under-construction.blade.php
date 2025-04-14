@extends('pages.layouts.base')

@section('base')
  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-lg px-4 md:px-8">
      <div class="grid gap-8 sm:grid-cols-2">
        <!-- content - start -->
        <div class="flex flex-col items-center justify-center sm:items-start md:py-24 lg:py-32">
          <h1 class="mb-2 text-center text-2xl font-bold text-gray-800 sm:text-left md:text-3xl">Página en construcción
          </h1>
          <p class="mb-4 text-center text-gray-500 sm:text-left md:text-lg">Lo sentimos, la página que buscas no está
            disponible en este momento.</p>
          <p class="mb-4 text-center text-gray-500 sm:text-left md:text-lg">Estamos trabajando para mejorar tu
            experiencia.</p>
          <p class="mb-4 text-center text-gray-500 sm:text-left md:text-lg">Por favor, vuelve más tarde.</p>

          <a href="{{ route('home') }}"
            class="px-6 py-3 text-lg font-semibold text-white bg-green-500 rounded-lg hover:bg-green-600 hover:!text-gray-50 transition-colors duration-300">
            Regresar al inicio
          </a>

        </div>
        <!-- content - end -->

        <!-- image - start -->
        <div class="relative h-80 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-auto">
          <img src="https://images.unsplash.com/photo-1590642916589-592bca10dfbf?auto=format&q=75&fit=crop&w=600"
            loading="lazy" alt="Photo by @heydevn" class="absolute inset-0 h-full w-full object-cover object-center" />
        </div>
        <!-- image - end -->
      </div>
    </div>
  </div>
@endsection
