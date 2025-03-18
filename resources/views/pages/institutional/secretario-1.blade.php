@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/funcionarios.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8">
          Secretaría de Gobierno y Modernización
        </h2>
      </div>

      <div>
        <p class="text-xl text-gray-50">
          La Secretaría de Gobierno y Modernización es la encargada de coordinar las políticas públicas y de modernizar
          la gestión municipal. A través de esta secretaría, se busca mejorar la calidad de vida de los ciudadanos y
          ciudadanas de Sáenz Peña. En esta sección, vas a conocer quién es el secretario y cuál es su función en la
          administración municipal.
        </p>
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
                <img src="{{ asset('assets/img/diego-landriscina.png') }}" alt="Foto del funcionario"
                  class="h-48 w-full object-cover md:w-48 rounded-lg">
              </div>

              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-green-700 font-semibold">Secretaría de Gobierno y
                  Modernización</div>
                <h2 class="mt-2 text-2xl font-bold">Diego Landriscina</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Mariano Moreno 801, Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Subsecretarías (lista de nombre de subsecretarías, sólo texto) --}}
        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Subsecretaría de Gobierno y Recursos Humanos</li>
                <li>Subsecretaría de Seguridad Vial</li>
                <li>Subsecretaría de Prevención Ciudadana</li>
                <li>Subsecretaría de Inspección General y Transporte</li>
                <li>Subsecretaría de Bromatología y Prevención de la Salud</li>
                <li>Subsecretaría de Comunicación</li>
                <li>Subsecretaría de Modernización</li>
                <li>Subsecretaría de Relaciones con la Comunidad</li>
                <li>Subsecretaría de Complejo Ecológico Municipal</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Proyectar Ordenanzas y proponer la modificación o derogación de las existentes referidos a áreas de su
                  incumbencia.</li>
                <li>Refrendar, publicar y hacer cumplir las Ordenanzas sancionadas por el Concejo Municipal y
                  reglamentarias en caso de que sea necesario.</li>
                <li>Proyectar mejoras en las normas relativas al régimen estatutario de estabilidad, escalafón, registros
                  y control de los recursos humanos.</li>
                <li>Entender en la formación, capacitación y evaluación de los recursos humanos del Municipio.</li>
                <li>Distribuir, nombrar y remover en forma general al Personal Municipal respetando la carrera
                  administrativa.</li>
                <li>Promover la vinculación con las diversas expresiones organizadas de la Comunidad de Presidencia Roque
                  Sáenz Peña.</li>
                <li>Desarrollar las relaciones institucionales internas del Departamento Ejecutivo con las agrupaciones
                  gremiales que representan al personal municipal.</li>
                <li>Diseñar, proponer y coordinar las políticas de transformación y modernización del Estado en distintas
                  áreas del Gobierno Municipal.</li>
                <li>Difundir las normas, regímenes, planes, programas, servicios, ordenanzas, decretos y actos municipales
                  relevantes, por los medios de difusión orales y escritos.</li>
                <li>Ejercer el control que compete al Municipio en las normas reguladoras del tránsito y seguridad vial,
                  del transporte de pasajeros y cargas y la habilitación de los conductores.</li>
                <li>Supervisar e implementar un sistema de inspección, prevención y control destinado a Bromatología y
                  Prevención de la Salud.</li>
                <li>Implementar, coordinar, autorizar y supervisar la inspección de acciones y actividades en la vía
                  pública.</li>
                <li>Ejercer el control municipal en el uso de los bienes de dominio público, así como en la observancia de
                  las normas de moralidad.</li>
                <li>Entender en la organización de medidas preventivas referidas a la seguridad urbana y articular
                  acciones con organismos sociales y gubernamentales con competencia en la materia.</li>
                <li>Planificar, formular e implementar políticas y estrategias que promuevan la participación ciudadana,
                  la responsabilidad social y la construcción de ciudadanía, desarrollando y articulando las funciones de
                  las distintas áreas del Ejecutivo Municipal con la sociedad civil y sus organizaciones.</li>
                <li>Promover la regularización de las organizaciones barriales y la relación con el gobierno municipal,
                  garantizando las herramientas necesarias para su creación.</li>
                <li>Mantener comunicación permanente con las diferentes áreas del Ejecutivo Municipal, a fin de articular
                  acciones y lograr mejores resultados.</li>
                <li>Coordinar y supervisar la organización y el funcionamiento de todos los servicios de los edificios
                  municipales a su cargo.</li>
                <li>Elaborar y elevar al Intendente la Memoria Anual de actividades desarrolladas por la Secretaría, los
                  informes y reportes periódicos de gestiones realizadas, y toda otra información sustantiva del área.
                </li>
                <li>Capacitar, coordinar y dirigir al personal a cargo, delegando funciones, asignando responsabilidades y
                  administrando los recursos disponibles de manera tal que contribuyan a alcanzar los fines y objetivos
                  del área.</li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
