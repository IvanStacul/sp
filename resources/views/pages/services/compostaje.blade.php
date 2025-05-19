@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/sustentable.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8 xl:text-6xl">
          PLAN SÁENZ PEÑA SUSTENTABLE Y CIRCULAR
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl grid grid-cols-1 gap-4">
      <p class="text-lg !text-gray-800">
        Se trata de un plan que impulsa la reducción drástica de los residuos sólidos urbanos a través de medidas
        ciudadanas muy fáciles de realizar.
      </p>
      <p class="text-lg !text-gray-800">
        El plan busca la autogestión del residuo por parte de los vecinos, a partir de la adopción de un método de
        compostaje. Lo que permite la liberación de los mismos vecinos de la dependencia del recolector.
      </p>
      <p class="text-lg !text-gray-800">
        El compostaje se logra mezclando los residuos orgánicos de cocina con otros residuos orgánicos como pasto seco,
        hojas secas o viruta de madera o aserrín. Puede realizarse en un balde con perforaciones en la base, en una caja
        de cartón, directamente en tierra, en un PCT, CCC, en Compostera de madera o paca digestora.
      </p>

      <h3 class="text-xl font-bold !text-gray-900 pt-4">El Plan tiene programas que traen beneficios a toda la comunidad:
      </h3>

      <p class="font-bold text-xl">1) Convertir la Planta de Tratamientos en un lugar MODELO donde mostrar todas las formas de
        compostaje y el proceso de compactación de reciclables.</p>

      <ul class="list-disc pl-6 pt-2 space-y-1 text-lg">
        <li>Cada residuo tiene todavía mucho para dar.</li>
        <li>Los orgánicos se transforman en tierra rica.</li>
        <li>El producto de la venta de reciclables, por ordenanza, se destina a proyectos de parquizacion y
          forestación.</li>
        <li>Ambos ejes del plan repercuten en el beneficio de la comunidad toda.</li>
      </ul>

      <p class="font-bold text-xl">2) Toda oficina municipal constituye un Punto de Recepción de Reciclaje.</p>

      <ul class="list-disc pl-6 pt-2 space-y-1 text-lg">
        <li>El vecino tiene la posibilidad de llevar sus reciclables limpios y compactado al punto más cercano.</li>
        <li>La basura NO desaparece por si sola.</li>
        <li>El recolector la retira y el vecino se tranquiliza.</li>
        <li>Sin embargo, la basura vuelve por el aire -con las quemas- y por las napas.</li>
        <li>Las botellas y bolsas tapan cunetas y alcantarillas.</li>
      </ul>

      <p class="text-lg !text-gray-800 pt-2">
        El plan lleva más de 450 dispositivos de compostaje entregados, con Escuelas e instituciones adheridas. Marcando
        así, el rumbo de la salubridad ambiental.
      </p>

      <p class="text-lg !text-gray-800">
        La sede del Plan es en el Centro Cultural Municipal. Ahí se pueden gestionar las composteras.
      </p>

      <p class="text-lg !text-gray-800">
        Podés conocer todos los detalles del Plan a través de Instagram en la cuenta <a
          href="https://www.instagram.com/sustentableycircularsp"
          class="text-green-600 hover:underline">@sustentableycircularsp</a>
      </p>
    </div>
  </section>
@endsection
