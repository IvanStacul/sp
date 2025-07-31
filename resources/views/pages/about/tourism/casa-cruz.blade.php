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
          Casa Cruz
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
          <h3 class="text-xl font-semibold md:text-2xl"> ¿Querés sorprenderte? </h3>
          <h2 class="text-3xl font-bold md:text-4xl"> Visitá la Casa Cruz </h2>
        </div>

        <p class="text-lg !text-gray-800">
          Envuelta en el misticismo popular, la Casa Cruz abre las puertas de su particular construcción para descubrir la historia de sus dueños originales.
        </p>
        <p class="text-lg !text-gray-800">
          La casa comenzó a ser construida en el año 1945 y fue habitada por su original familia hasta fines del año 1948. Hasta hoy no se conocen con exactitud las razones por las que Naiden Ivanoff construyó la casa. Rodeada de 12 canales que conducen a 4 pozos de agua, la casa cuenta con un solo ambiente en forma de cruz. Dos diques circulares la rodean, sirviendo de barrera acuática para aquellos que intentaran ingresar a la vivienda. En su interior, la casa estaba amueblada con ocho camas, dos en cada una de las puntas, con sus respectivos guardarropas individuales, y en el centro de la misma una mesa en forma de cruz con ocho sillas.
        </p>
        <p class="text-lg !text-gray-800">
          Su arquitectura refleja un verdadero trabajo artístico.
        </p>

        <div class="lg:flex align-items-center">
          <div class="lg:w-1/2">
            <div class="mb-6 relative bg-clip-border rounded-[0.1875rem]">
              <div class="">
                <h2 class="mb-4 text-2xl mt-0 font-semibold">¿Cuándo y cómo visitarla?</h2>

                <p class="text-lg !text-gray-800">
                  Pampa Aguado a 4 Km de calle 51. Entrada libre y gratuita.
                </p>
                <p class="text-lg !text-gray-800 font-bold">
                  Abierta de lunes a viernes de 8 a 12 hs. y de 15 a 20 hs. Los fines de semana y feriados de 9 a 19:30 hs.
                </p>
              </div>
            </div>
          </div>

          <div class="lg:w-5/12 ms-auto overflow-x-hidden rounded-lg">
            <div class="h-[500px]">
              <div id="marker-map5" class="h-full rounded-lg" data-toggle="map"
                data-map="{&quot;mapCenter&quot;: [40.749179, -73.989276], &quot;zoom&quot;: 13, &quot;useTextIcon&quot;: false, &quot;interactive&quot;: true, &quot;geojson&quot;: &quot;/assets/sample-listing-geojson.json&quot; }">
                <iframe class="w-full h-[460px]"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109040.36997241409!2d-60.45660079042705!3d-26.694986813938076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d8d88a0a5f1%3A0x4e875b60b089d6c5!2sCasa%20Cruz!5e0!3m2!1ses!2sar!4v1753831215580!5m2!1ses!2sar"
                  frameborder="0"></iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
