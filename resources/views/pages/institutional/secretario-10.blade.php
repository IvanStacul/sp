@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/funcionarios.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-7xl text-gray-50 font-bold md:mb-8">
          Secretaría de Relaciones Institucionales
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-5xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-4xl">
      <div class="space-y-5 md:space-y-8">
        {{-- Funciones --}}
        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="mx-auto">
            <div class="md:flex md:flex-row md:gap-8 md:items-center md:justify-center">
              <div class="md:flex-shrink-0 ">
                <img src="https://v0.dev/placeholder.svg?height=600&width=600" alt="Foto del funcionario"
                  class="h-48 w-full object-cover md:w-48 rounded-lg">
              </div>

              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-green-700 font-semibold">
                  Secretario de Relaciones Institucionales
                </div>
                <h2 class="mt-2 text-2xl font-bold">Eduardo Molina</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Mariano Moreno 801, Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Subsecretaría de Relaciones Institucionales e Integración Comunitaria</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Promover, planificar y ejecutar acciones y programas tendientes a la integración del Gobierno local
                  con otros municipios, con el Estado Provincial y con el Estado Nacional, en un contexto de globalización
                  económica e institucional regional y mundial.</li>
                <li>Asistir al Intendente en las tareas de articulación de las relaciones político-institucionales con la
                  comunidad y en los organismos del ámbito nacional, provincial, regional y municipal en general.</li>
                <li>Desarrollar actividades de cooperación descentralizada y participación en foros multilaterales, como
                  Redes de Ciudades, Congresos y Eventos en general.</li>
                <li>Promover, elaborar y coordinar la firma de convenios de cooperación, hermandad y trabajo entre la
                  Municipalidad y organismos gubernamentales, no gubernamentales, educativos, culturales y de otras
                  índoles tendientes a mejorar relaciones sociales, políticas, económicas y culturales.</li>
                <li>Articular y coordinar la participación de las organizaciones locales, las colectividades, las
                  Organizaciones No Gubernamentales y otras en el proceso de toma de decisiones del Gobierno local en
                  materia de Desarrollo Local.</li>
                <li>Realizar acciones tendientes a la integración socio-cultural canalizando las demandas y consultas de
                  los pueblos originarios, de las colectividades de inmigrantes y de los distintos cultos.</li>
                <li>Cooperar, asesorar, planificar, organizar, promocionar, gestionar recursos y evaluar la realización de
                  Fiestas, Festivales y Eventos de carácter cultural, económico y social que contribuyan a insertar a la
                  ciudad en un contexto regional, provincial y nacional.</li>
                <li>Organizar junto con instituciones, asociaciones locales y áreas municipales, el calendario de eventos
                  de la ciudad.</li>
                <li>Promover y organizar conferencias y capacitaciones en materia de relaciones institucionales,
                  integración regional, promoción turística y de eventos, rol regional de la ciudad.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
