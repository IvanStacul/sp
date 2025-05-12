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
        Se puede acceder al pago del estacionamiento medido de varias formas:
      </p>
      <ol class="text-lg !text-gray-800 list-decimal pl-6 mt-2">
        <li>Comprando el tiempo que va a permanecer el vehículo estacionado en algunos de los comercios adheridos para la venta o en las oficinas municipales habilitadas (economía, juzgado de faltas, oficina SEM) solo informando el número de Dominio del vehículo.</li>
        <li>También se puede utilizar la aplicación de celular "SEM Sáenz Peña" (se puede descargar en Play store o App Store).</li>
        <li>Accediendo a la página web <a href="https://www.sem.com.ar" class="underline" target="_blank" rel="noopener noreferrer">www.sem.com.ar</a> y usarla en línea.</li>
      </ol>
      <p class="text-lg !text-gray-800 mt-2">
        <strong>NOTA:</strong> Tanto para la versión app o en línea, deben crear una cuenta con usuario y contraseña.
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Horarios de estacionamiento medido</h3>
      <p class="text-lg !text-gray-800">
        Lunes a viernes de 08:00hs a 12:00hs y de 16:00hs a 20:00hs.
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Carga de Crédito o venta de tiempo</h3>
      <dd>
        <dt class="text-lg font-bold !text-gray-800">Oficina de Economía</dt>
        <p>(calle 16 y 3 - Centro)</p>
        <dt class="text-lg font-bold !text-gray-800">Centro de Gestión</dt>
        <p>(calle 12 y 5 - ensanche sur)</p>
        <dt class="text-lg font-bold !text-gray-800">Centro de Gestión del Barrio Puerta del Sol</dt>
        <p>(calle 33 y 36)</p>
        <dt class="text-lg font-bold !text-gray-800">Juzgado de Faltas Municipal</dt>
        <p>(calle 10 y 15 - centro)</p>
        <dt class="text-lg font-bold !text-gray-800">Oficina SEM</dt>
        <p>(calle 10 y 15 - centro)</p>
        <dt class="text-lg font-bold !text-gray-800">En comercios adheridos</dt>
      </dd>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Valor</h3>
      <p class="text-lg !text-gray-800">
        $300 la hora
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Área de estacionamiento medido</h3>
      <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
        <li>Calle Belgrano (10) entre Avda. Sarmiento (1) Y Avellaneda (19) - ambas manos.</li>
        <li>Calle San Martin (12) entre Avda. Sarmiento (1) Y Bown (23) - ambas manos.</li>
        <li>Calle M. Moreno (14) entre Avda. Sarmiento (1) y Avellaneda (19) - ambas manos.</li>
        <li>Ada. Sarmiento (1) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Saavedra (3) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Chacabuco (5) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Pellegrini (7) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle 9 de julio (9) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle 25 de mayo (11) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Mitre (13) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Laprida (15) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Superiora Palmira (17) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
        <li>Calle Avellaneda (19) entre Güemes (8) y Rivadavia (16) - ambas manos.</li>
      </ul>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Información adicional</h3>
      <p class="text-lg !text-gray-800">
        Solicitá más información mandando e-mail a sem@saenzpeña.gob.ar o llamando al 3644 - 751659
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">Comercios Adheridos</h3>
      <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
        <li>EL RODEO - ACUARIO /PET SHOP - MORENO 226 (14)</li>
        <li>FARMACIA FÁTIMA - SARMIENTO 369 (1) E 8 Y 10</li>
        <li>TRES G BELGRANO 345 (10) E 7 Y 9</li>
        <li>SNACK - 9 DE julio 441 (9) E 12 Y 10</li>
        <li>OFICINA MUNICIPAL - 33 esquina 38</li>
        <li>OFICINA MUNICIPAL - ENSANCHE SUR (5 entre 12 y 10)</li>
        <li>JUZGADO DE FALTAS - 10 esquina 15</li>
        <li>OFICINA MUNICIPAL - ECONÓMIA - 16 y 3</li>
        <li>CENTER CEL - SAN MARTIN 928 (12) E 19 Y 21</li>
        <li>LO DE OLI - MORENO 769 (14) E 15 Y 17</li>
        <li>CREDI-PERS HOGAR - SAN MARTIN 529 (12) E 11 Y 13</li>
        <li>INDEPENDENCIA 13 - SUB AGEN C.Janik 13 ensanche sur</li>
        <li>RODRYS CALZADOS San Martín 124 12 E 3 y 5</li>
        <li>AGENCIA SAN MARTÍN - S. MARTÍN 794 - (12) E 15 y 17</li>
        <li>OMEGA - 25 DE MAYO (11) ENTRE 12 Y 14</li>
        <li>KIOSCO BLUE - PELLEGRINI 816 (7) E 12 y 14</li>
        <li>LO DE BETO - MITRE (13) E 12 Y 14</li>
        <li>LO DE BETO 2 - CALLE 12 E 15 Y 17</li>
        <li>CAFÉ TE INVITO - CALLE 10 E 15 Y 17</li>
        <li>JUMPER COMPU-CEL, M. MORENO, 428, 14 E 9 y 11</li>
        <li>TEL AVELLANEDA, AVELLANEDA, 742, 19 E 16 y 18</li>
        <li>AG. QUINI WALTER, M. MORENO, 292, 14 CASI 7</li>
        <li>ALGO MAS, M. MORENO, 575, 14 E 11 Y 13</li>
        <li>ALGO MAS, SAN MARTIN, 475, 12 E 9 Y 11</li>
        <li>SANTERIA SAN ROQUE, BELGRANO, 261, 10 E 7 Y 5</li>
        <li>PELUQUER ARMANDO, SUP. PALMIRA, 314, 17 E 8 Y 10</li>
        <li>NOWAK YOLANDA, AVELLANEDA, 536, 9 E 14 Y 16</li>
        <li>IL SANSONE ESTETICA, MARIANO MORENO, 774, 14 E 15 Y 17</li>
        <li>MAS IMPRECIONES, MITRE, 657, 13 E 14 Y 16</li>
        <li>OPTICA BENITEZ, SAN MARTIN, 984, 12 E 19 Y 21</li>
        <li>RAPIPAGO AV.1, AV. SARMIENTO, 877, 1 E 20 Y 18</li>
        <li>DIREC TV, SAN MARTIN, 200, 12 E 5 Y 7</li>
        <li>FOTOC. GOMEZ, BELGRANO, 600, 10 ESQ. 13</li>
        <li>HOREB 24 HS, SAN MARTIN, 246, 12 E 5 Y 7</li>
        <li>AG. QUINI RODRIGU, SAN MARTIN, 1, 12 ESQ. 1</li>
      </ul>
    </div>
  </section>
@endsection
