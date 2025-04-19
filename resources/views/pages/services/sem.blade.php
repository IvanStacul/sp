@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/estacionamiento-medido.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    {{-- <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-7xl text-gray-50 md:mb-8">
          Sistema de Estacionamiento Medido
        </h2>
      </div>
    </div> --}}
  </div>
@endsection

@section('base')
  <section class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">
      <h3 class="text-2xl font-bold text-gray-800">¿Cómo se paga?</h3>
      <p class="text-lg !text-gray-800">
        La forma de pago consta de un código QR, que se puede encontrar en distintas vidrieras y comercios adheridos del
        centro, en los QR pegados en los carteles indicadores del SEM y en las credenciales del personal del SEM. Además,
        para el pago, también se puede utilizar la aplicación de celular "SEM Sáenz Peña" (se puede descargar en Play
        store o App Store), o la página web
        <a href="https://www.sem.com.ar" class="underline" target="_blank" rel="noopener noreferrer">www.sem.com.ar</a>.
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Horarios de estacionamiento medido</h3>
      <p>
        <b> Lunes a Viernes </b> de 08:00hs a 12:00hs y de 16:00hs a 20:00hs.
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Carga de Crédito</h3>
      <dd>
      <dt class="text-lg font-bold !text-gray-800">Oficina de Economía</dt>
      <p> (calle 16 y 3 - Centro) </p>
      <dt class="text-lg font-bold !text-gray-800">Centro de Gestión</dt>
      <p> (calle 12 y 5 - ensanche sur) </p>
      <dt class="text-lg font-bold !text-gray-800">Centro de Gestión del Barrio Puerta del Sol</dt>
      <p> (calle 33 y 36) </p>
      <dt class="text-lg font-bold !text-gray-800">Juzgado de Faltas Municipal</dt>
      <p> (calle 10 y 15 - centro) </p>
      </dd>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Valor</h3>
      <p class="text-lg !text-gray-800">
        $40 la hora
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Área de estacionamiento medido</h3>
      <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
        <li>Calle Belgrano (10) entre Avda. Sarmiento (1) Y Avellaneda (23) - ambas manos.</li>
        <li>Calle San Martin (12) entre Avda. Sarmiento (1) Y Bown (23) - ambas manos.</li>
        <li>Calle M. Moreno (14) entre Avda. Sarmiento (1) y Avellaneda (23) - ambas manos.</li>
        <li>Ada. Sarmiento (1) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Saavedra (3) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Chacabuco (5) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Pellegrini (7) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle 9 de julio (9) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle 25 de Mayo (11) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Mitre (13) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Laprida (15) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Superiora Palmira (17) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Avellaneda (19) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
      </ul>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Información adicional</h3>
      <p class="text-lg !text-gray-800">
        Los comerciantes y frentistas tendrán un 40% de descuento presentando los requisitos en la Oficina del
        estacionamiento medido, ubicado en calle 10 entre 15 y 17.
      </p>
      <p class="text-lg !text-gray-800">
        Solicitá más información mandando e-mail a sem@saenzpeña.gob.ar o llamando al 103.
      </p>

      {{-- dos botones con un enlace a un pdf - centrados --}}
      <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4 mt-8">
        <a href="{{ asset('assets/docs/folleto-comercios-adheridos.pdf') }}" target="_blank"
          class="px-6 py-3 text-lg font-semibold text-white bg-green-500 rounded-lg hover:bg-green-600 hover:!text-gray-50">
          Comercios Adheridos
        </a>
        <a href="{{ asset('assets/docs/folleto-comercios-adheridos-DORSO.pdf') }}" target="_blank"
          class="px-6 py-3 text-lg font-semibold text-white bg-green-500 rounded-lg hover:bg-green-600 hover:!text-gray-50">
          Comercios Adheridos (DORSO)
        </a>
      </div>
    </div>
  </section>
@endsection
