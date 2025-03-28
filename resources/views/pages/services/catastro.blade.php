@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/estacionamiento-medido.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-7xl text-gray-50 md:mb-8">
          Barrios de la ciudad
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">
      <p class="text-lg !text-gray-800">
        En la dirección de catastro de la Municipalidad de Pcia. R. Saenz Peña contamos con planos impresos y en formato
        digital de:
      </p>
      <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
        <li>Plano general de la ciudad.</li>
        <li>Plano de calles pavimentadas, asfaltadas y adoquinadas.</li>
        <li>Plano de ubicación de edificios y sitios históricos.</li>
        <li>Plano de barrios.</li>
        <li>Plano de límites de planta urbana, semiurbana y rural.</li>
        <li>Fotografía aérea de la ciudad realizada en el año 1999.</li>
        <li>Fotografía aérea de la ciudad realizada en el año 2018.</li>
        <li>Planos de nivelación perteneciente al Plan de Desagües Pluviales.</li>
        <li>Plano de cuencas pluviales urbanas perteneciente al Plan de Desagües Pluviales.</li>
      </ul>

      <p class="text-lg !text-gray-800 mt-4">
        <b> Domicilio de la Dirección de Catastro: </b> Av. 1 entre 16 y 18 centro.
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Estos son los barrios de nuestra ciudad</h3>

      <p class="text-lg !text-gray-800 mt-4"> Ya esta disponible el nuevo Sistema gratuito de Información Catastral </p>
      <p class="text-lg !text-gray-800 mt-4">
        <a href="https://geomat-maps.com.ar/msp/maptiles/msp-wmts-pub.php" class="underline hover:!text-green-600"
          target="_blank" rel="noopener noreferrer">https://geomat-maps.com.ar/msp/maptiles/msp-wmts-pub.php</a>
      </p>

      <p class="text-lg !text-gray-800 mt-4"> Este nuevo sistema fue diseñado por la oficina municipal de Catastro y puede
        usarse en cualquier dispositivo (celular, PC, tablet) que cuente con acceso a internet. </p>
      <p class="text-lg !text-gray-800 mt-4"> Allí podrán encontrar fácilmente información catastral de todo tipo como ser
        nombres y números de calles, pavimentos, red de gas, etc. </p>
      <p class="text-lg !text-gray-800 mt-4"> El sistema se actualiza mensualmente y no contiene información catastral
        privada. </p>

    </div>
  </section>
@endsection
