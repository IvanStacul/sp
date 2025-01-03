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
          Funcionarios
        </h2>
      </div>

      <div>
        <p class="text-xl">
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
                <a href="#"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&amp;q=75&amp;fit=crop&amp;crop=top&amp;w=600&amp;h=700"
                    loading="lazy" alt="Photo by Austin Wade"
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
              <!-- product - start -->
              <div>
                <a href="{{ route('pages.institutional.secretary-1') }}"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                    loading="lazy" alt="Photo by Austin Wade"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretaría de Gobierno y Modernización</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Diego Landriscina</span>
                  </div>
                </a>
              </div>
              <!-- product - end -->

              <!-- product - start -->
              <div>
                <a href="#"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="https://images.unsplash.com/photo-1603344797033-f0f4f587ab60?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                    loading="lazy" alt="Photo by engin akyurt"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretaría de Economía</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Alejandra María Quintana</span>
                  </div>
                </a>
              </div>
              <!-- product - end -->

              <!-- product - start -->
              <div>
                <a href="#"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="https://images.unsplash.com/photo-1552668693-d0738e00eca8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                    loading="lazy" alt="Photo by Austin Wade"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretaría de Desarrollo Humano y Deportes</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Germán Rearte</span>
                  </div>
                </a>
              </div>
              <!-- product - end -->

              <!-- product - start -->
              <div>
                <a href="#"
                  class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                  <img
                    src="https://images.unsplash.com/photo-1560269999-cef6ebd23ad3?auto=format&q=75&fit=crop&w=600&h=700"
                    loading="lazy" alt="Photo by Austin Wade"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                  <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                    <span class="text-gray-500">Secretaría de Servicios Públicos</span>
                    <span class="text-lg font-bold text-gray-800 lg:text-xl">Pablo Álvarez</span>
                  </div>
                </a>
              </div>
              <!-- product - end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
