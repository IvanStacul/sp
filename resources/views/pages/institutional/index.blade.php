@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/funcionarios.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8">
          Funcionarios
        </h2>
      </div>

      <div>
        <p class="text-xl text-gray-50">
          Acá vas a conocer los nombres de los funcionarios y cuál es el cargo en el que están asignados. Nuestro
          objetivo es brindarte una visión general de la estructura de la administración municipal y de las
          responsabilidades de cada secretaría. De esta manera, tendrás un mayor conocimiento sobre quiénes son los
          encargados de tomar decisiones en diferentes áreas de la gestión municipal.
        </p>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-7xl">
      <div class="space-y-5 md:space-y-8">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="mx-auto max-w-md">
            <div class="grid gap-4 grid-cols-1">
              <div>
                <a href="{{ route('pages.institutional.intendencia') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="{{ asset('assets/img/bruno-cipolini.png') }}" loading="lazy" alt="Foto de Bruno Cipolini"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110">

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Intendente</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">
                      Bruno Cipolini
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="mx-auto">
            <div class="grid gap-4 sm:grid-cols-1 md:gap-6 lg:grid-cols-2 xl:grid-cols-3">

              <div>
                <a href="{{ route('pages.institutional.secretario-1') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="{{ asset('assets/img/diego-landriscina.png') }}" loading="lazy"
                    alt="Foto de Diego Landriscina"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Gobierno y Modernización</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Diego Landriscina</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-2') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="https://v0.dev/placeholder.svg?height=700&width=600" loading="lazy"
                    alt="Foto de Germán Rearte"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Desarrollo Humano y Deportes</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Germán Rearte</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-3') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="https://v0.dev/placeholder.svg?height=700&width=600" loading="lazy" alt="Foto de Pedro Egea"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Gestión y Promoción Educativa</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Pedro Egea</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-4') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="https://v0.dev/placeholder.svg?height=700&width=600" loading="lazy"
                    alt="Foto de Javier Polentarrutti"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Planificación y Control de Gestión</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Javier Polentarrutti</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-5') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="https://v0.dev/placeholder.svg?height=700&width=600" loading="lazy"
                    alt="Foto de María Alejandra Quintana"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretaria de Economía</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">María Alejandra Quintana</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-6') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="https://v0.dev/placeholder.svg?height=700&width=600" loading="lazy" alt="Foto de Alicia Gaña"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretaria de Cultura y Educación Ciudadana</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Alicia Gaña</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-7') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img src="https://v0.dev/placeholder.svg?height=700&width=600" loading="lazy"
                    alt="Foto de Pablo Alvarez"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Servicios Públicos</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Pablo Alvarez</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-8') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="{{ asset('assets/img/claudio-gil.png') }}"
                    loading="lazy" alt="Foto de Claudio Gil"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Obras Públicas</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Claudio Gil</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-9') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="{{ asset('assets/img/oscar-pablo-dudik.png') }}"
                    loading="lazy" alt="Foto de Oscar Dudik"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Desarrollo Local</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Oscar Dudik</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-10') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="https://v0.dev/placeholder.svg?height=700&width=600"
                    loading="lazy" alt="Foto de Eduardo Molina"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretario de Relaciones Institucionales</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Eduardo Molina</span>
                  </div>
                </a>
              </div>

              <div>
                <a href="{{ route('pages.institutional.secretario-11') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="https://v0.dev/placeholder.svg?height=700&width=600"
                    loading="lazy" alt="Foto de Soledad González"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretaria General e Información Pública</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Soledad González</span>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
