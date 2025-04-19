@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/residuos.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8 xl:text-6xl">
          Recolección de Residuos
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">
      <h3 class="text-2xl font-bold text-gray-800">¿En qué consiste?</h3>
      <p class="text-lg !text-gray-800">
        Separación en origen de aquellos materiales que se pueden valorizar a través del reciclado de los otros residuos domiciliarios, aquellos que no se descomponen fácilmente y pueden volver a ser utilizados en procesos productivos como materia prima.
      </p>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">¿Cuáles son sus beneficios?</h3>
      <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
        <li>Reduce el volumen de residuos sólidos con destino de enterramiento.</li>
        <li>Reduce el impacto ambiental que supone el enterramiento de estos residuos.</li>
        <li>Tiende a erradicar los basurales a cielo abierto.</li>
        <li>Ordena el circuito de recolección informal de residuos sólidos para el reciclaje.</li>
        <li>Ahorra recursos naturales y energía.</li>
      </ul>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">¿Cómo debe separar el Vecino?</h3>
      <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
        <li>Separar los materiales que se pueden recuperar, del resto de los residuos domiciliarios.</li>
        <li>Cuidar que no queden en ellos restos de material que pueda descomponerse.</li>
        <li>Dejar escurrir para que esten totalmente secos.</li>
        <li>Colocar en una bolsa.</li>
        <li>Sacar la bolsa a la vereda el día y en el horario que corresponda según el barrio.</li>
      </ul>

      <h3 class="text-2xl font-bold text-gray-800 mt-8">¿Qué destinos tienen los residuos descartables?</h3>
      <p class="text-lg !text-gray-800">
        Una vez finalizado el recorrido del servicio, los materiales recolectados son enviados al Predio de Disposición autorizado por la Municipalidad. En la actualidad se trata del Predio denominado “Planta de tratamiento de residuos sólidos urbanos”.
      </p>
    </div>
  </section>
@endsection
