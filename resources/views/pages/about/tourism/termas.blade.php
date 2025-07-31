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
          Complejo Termal y Spa
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
            ¿Necesitás relajarte?
          </h3>

          <h2 class="text-3xl font-bold md:text-4xl">El Complejo Termal te espera</h2>
        </div>

        <p class="text-lg !text-gray-800">
          Un espacio de relax y armonía en el centro del Chaco con la mayor riqueza de sus aguas termales. El Complejo
          Termal es único en el norte argentino por las características de salubridad y por los minerales que brinda, por
          la gran variedad de servicios y por contar con una cámara de aislamiento sensorial, o flotario, diseñado para
          renovar cuerpo y mente.
        </p>
        <p class="text-lg !text-gray-800">
          Las propiedades terapéuticas de las aguas termales son beneficiosas para reumatismo crónico, artrosis-artritis
          crónica, enfermedades de la piel, bursitis-ciática y neuralgias, afecciones ginecológicas crónicas- anexitis,
          debilidad general, y como sedante nervioso y relajante muscular. Además, las instalaciones cuentan con el Salón
          de Té Las Termas (<a href="https://www.instagram.com/lastermastebar"
            class="text-green-700 hover:text-green-600 hover:underline">@lastermastebar</a>), donde se puede disfrutar de
          una carta completamente artesanal de bebidas y comidas naturales,
          frescas y saludables.
        </p>

        <!-- Sección de Documentos del Complejo Termal -->
        <div class="mb-8">
          <h3 class="text-xl font-semibold mb-4">Catálogos y Tarifas</h3>

          <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            <a href="{{ asset('assets/docs/catalogo-general.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Catálogo General</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/termal-individual.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Termal Individual</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/piscina-termal.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Piscina Termal</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/piscina-climatizada.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Piscina Climatizada</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/flotario.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Flotario</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/banio-turco.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Baño Turco</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/vip.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">VIP</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/masajes-terapias.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Masajes y Terapias</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/cosmetologia-estetica.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Cosmetología y Estética</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>

            <a href="{{ asset('assets/docs/sonoterapia.pdf') }}" target="_blank"
              class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-lg flex-shrink-0">
                  <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="flex-1 min-w-0 ">
                  <h4 class="text-sm font-semibold text-gray-900 mb-1">Sonoterapia</h4>
                  {{-- <p class="text-xs text-gray-500">Precios • PDF • 245 KB</p> --}}
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="lg:flex align-items-center">
          <div class="lg:w-1/2">
            <div class="mb-6 relative bg-clip-border rounded-[0.1875rem]">
              <div class="">
                <h2 class="mb-4 text-2xl mt-0 font-semibold">Servicios del Complejo Termal</h2>

                <ul class="flex flex-col divide-y divide-gray-200 dark:divide-neutral-700">
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Baños Termales
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Piscina Max - Climatizada
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Masaje Local
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Masaje General
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Baños Diaforéticos (Turco - Sauna)
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Aqua Gym (clases)
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Nadación (clases)
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Shiatsu
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Reflexología
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Piedras Calientes
                  </li>
                  <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                    Cosmetología
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="lg:w-5/12 ms-auto overflow-x-hidden">
            <div class="h-[600px] rounded-lg">
              <div id="marker-map5" class="h-full" data-toggle="map"
                data-map="{&quot;mapCenter&quot;: [40.749179, -73.989276], &quot;zoom&quot;: 12, &quot;useTextIcon&quot;: false, &quot;interactive&quot;: true, &quot;geojson&quot;: &quot;/assets/sample-listing-geojson.json&quot; }">
                <iframe class="w-full h-[530px] rounded-lg"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.8291618253197!2d-60.438599399999994!3d-26.781715099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1cc1af2f73%3A0xdd44a802d0898f!2sCOMPLEJO%20TERMAL%20Y%20SPA!5e0!3m2!1ses-419!2sar!4v1753491503124!5m2!1ses-419!2sar"
                  frameborder="0"></iframe>
              </div>
            </div>
          </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
          <div class="flex mb-3">
            <span class="flex items-center justify-center w-12 h-12 bg-rose-500/20 rounded-lg relative me-4 shrink-0">

              <svg width="800px" class="w-7 h-7 text-rose-600" height="800px" viewBox="0 0 32 32" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                  d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z" />
                <path fill="currentColor"
                  d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z" />
              </svg>
            </span>
            <div class="grow">
              <h5 class="text-base text-gray-700 font-bold">Instagram</h5>
              <a href="https://www.instagram.com/termasdesaenzpena" target="_blank"
                class="text-gray-500 my-1 hover:text-green-600 hover:underline">@termasdesaenzpena</a>
            </div>
          </div>

          <div class="flex mb-3">
            <span class="flex items-center justify-center w-12 h-12 bg-orange-500/20 rounded-lg relative me-4 shrink-0">
              <svg class="w-7 h-7 text-orange-500" viewBox="0 0 24 24" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                  <path
                    d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z"
                    id="Path-76" fill="currentcolor"></path>
                  <path
                    d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z"
                    id="Combined-Shape" fill="currentcolor" opacity="0.3"></path>
                </g>
              </svg>
            </span>
            <div class="grow">
              <h5 class="text-base text-gray-700 font-bold">Teléfono</h5>
              <a href="tel:+5493644433177" target="_blank"
                class="text-gray-500 my-1 hover:text-green-600 hover:underline">+5493644433177</a>
            </div>
          </div>

          <div class="flex mb-3">
            <span class="flex items-center justify-center w-12 h-12 bg-blue-500/20 rounded-lg relative me-4 shrink-0">
              <svg width="800px" height="800px" viewBox="0 0 1920 1920" class="w-7 h-7 text-blue-500"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"
                  d="M1168.737 487.897c44.672-41.401 113.824-36.889 118.9-36.663l289.354-.113 6.317-417.504L1539.65 22.9C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l62.045-451.233H1126.66v-69.152c0-54.937 14.214-96.112 42.078-122.058"
                  fill-rule="evenodd" />
              </svg>
            </span>

            <div class="grow">
              <h5 class="text-base text-gray-700 font-bold">Facebook</h5>
              <a href="https://www.facebook.com/complejotermalsp" target="_blank"
                class="text-gray-500 my-1 hover:text-green-600 hover:underline">complejotermalsp</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
