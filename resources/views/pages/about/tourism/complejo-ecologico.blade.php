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
          Complejo Ecológico Municipal
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
            ¿Necesitás aventura?
          </h3>

          <h2 class="text-3xl font-bold md:text-4xl">Visitá el Complejo Ecológico Municipal</h2>
        </div>

        <p class="text-lg !text-gray-800">
          En sus 150 hectáreas de extensión, encontrarás un Parque Animal que alberga más de 2000 animales de 215 especies
          diferentes y una Reserva Botánica de 32 hectáreas destinadas a conservar ejemplares autóctonos.
        </p>
        <p class="text-lg !text-gray-800">
          El área recreativa comprende 25 hectáreas, que cuentan con baños, múltiples juegos infantiles, campo de deportes
          con espacio para prácticas de voley y fútbol, tanto para niños como para adultos, kiosco y numerosas parrillas
          con bancos de uso gratuito.
        </p>
        <p class="text-lg !text-gray-800">
          El sendero peatonal tiene más de 1200 metros que se pueden recorrer a lo largo de un laberinto que atraviesa la
          Reserva Botánica de especies autóctonas del Parque Chaqueño.
        </p>

        <div class="lg:flex align-items-center">
          <div class="lg:w-1/2">
            <div class="mb-6 relative bg-clip-border rounded-[0.1875rem]">
              <div class="">
                <h2 class="mb-4 text-2xl mt-0 font-semibold">Tarifas</h2>

                <div class="flex flex-col">
                  <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                      <div
                        class="border border-gray-200 rounded-lg shadow-xs overflow-hidden dark:border-neutral-700 dark:shadow-gray-900">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Hasta 12 años
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                $2.000
                              </td>
                            </tr>

                            <tr>
                              <td
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Mayores de 12 años
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                $3.000
                              </td>
                            </tr>

                            <tr>
                              <td
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Autos
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                $3.000
                              </td>
                            </tr>

                            <tr>
                              <td
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Motos
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                $1.000
                              </td>
                            </tr>
                             <tr>
                              <td
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Parrillas Exteriores
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                Gratuitas
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="lg:w-5/12 ms-auto overflow-x-hidden">
            <div class="h-[500px] rounded-lg">
              <div id="marker-map5" class="h-full" data-toggle="map"
                data-map="{&quot;mapCenter&quot;: [40.749179, -73.989276], &quot;zoom&quot;: 12, &quot;useTextIcon&quot;: false, &quot;interactive&quot;: true, &quot;geojson&quot;: &quot;/assets/sample-listing-geojson.json&quot; }">
                <iframe class="w-full h-[460px] rounded-lg"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5035.499409615391!2d-60.42144275503993!3d-26.819723521596732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x944132803074133b%3A0x1425842508af3010!2zQ29tcGxlam8gRWNvbMOzZ2ljbyBTw6FlbnogUGXDsWE!5e0!3m2!1ses!2sar!4v1753830445613!5m2!1ses!2sar"
                  frameborder="0"></iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
