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
          Secretaría de Servicios Públicos
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
                  Secretario de Servicios Públicos
                </div>
                <h2 class="mt-2 text-2xl font-bold">Pablo Álvarez</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Calle 19 entre 26 y 28 (centro), Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Subsecretaria de Servicios Básicos Municipales</li>
                <li>Subsecretaría de Medio Ambiente</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Planificar, dirigir, ejecutar, controlar y evaluar la prestación de servicios públicos municipales,
                  designando días, horarios, presupuesto, maquinarias, insumos y personal a las diferentes tareas y
                  programas, tales como recolección de residuos, riego, limpieza de calles, mantenimiento de ripios y
                  calles de tierra, mantenimiento de bombas hidráulicas, mantenimiento de canales de desagüe y todas las
                  actividades de talleres necesarias para el funcionamiento del Corralón Municipal.</li>
                <li>Dirigir tareas en los diferentes Corralones Municipales y coordinar actividades entre sí y en conjunto
                  con otras áreas municipales.</li>
                <li>Implementar las políticas establecidas por el Municipio para la correcta gestión integral de los
                  residuos sólidos urbanos.</li>
                <li>Establecer a los particulares los horarios, días, lugares y condiciones en los que podrán depositar
                  los residuos sólidos.</li>
                <li>Implementar aquellos programas y proyectos relacionados con la recuperación, reutilización, reciclado,
                  tratamiento y disposición final de los residuos sólidos urbanos.</li>
                <li>Programar, ejecutar y controlar la expansión de los servicios públicos municipales, en consonancia con
                  el crecimiento urbano y la demanda de la población.</li>
                <li>Formular e implementar la planificación y el control del tratamiento de residuos sólidos urbanos
                  húmedos y secos.</li>
                <li>Planificar, dirigir, ejecutar, controlar y evaluar la correcta actividad de la planta de tratamiento
                  de residuos, ejerciendo el poder de fiscalización, control y sanción de los servicios de carga y
                  descarga de residuos, como así también, la construcción, contratación y/o licitación de nuevas plantas
                  de tratamiento.</li>
                <li>Participar en la elaboración de instrumentos de promoción económica para las cooperativas y empresas
                  que operen en el mercado de la recuperación y reciclado.</li>
                <li>Programar, ejecutar y controlar el mantenimiento y mejoramiento de espacios verdes, plazas, paseos,
                  bulevares y espacios públicos.</li>
                <li>Ejercer la superintendencia y el control de bienes, depósitos de herramientas, máquinas y vehículos
                  del corralón central municipal, los corralones descentralizados, y el cementerio municipal.</li>
                <li>Desarrollar e implementar el Programa Municipal de Forestación, planificación y conservación del
                  arbolado urbano (mantenimiento, poda, extracción).</li>
                <li>Planificar, desarrollar y participar, en articulación con la Secretaría de Cultura y Educación
                  Ciudadana, de Desarrollo Local y de Planificación, en la concientización sobre cuidado de Medio Ambiente
                  Urbano.</li>
                <li>Administrar, dirigir las tareas realizadas en el Cementerio Municipal, asegurando la conservación en
                  correcto estado de las instalaciones, realizando tareas de inhumación, autorizando y coordinando la
                  tarea de sepultura con particulares y empresas prestadoras de servicios fúnebres.</li>
                <li>Organizar y mantener actualizado el plano del Cementerio Municipal.</li>
                <li>Realizar exhumaciones conforme a orden judicial.</li>
                <li>Fiscalizar los servicios de vigilancia, mantenimiento y limpieza del Cementerio Municipal.</li>
                <li>Apostar a la seguridad y bienestar de los trabajadores municipales dotándolos de herramientas y
                  equipamientos necesarios para desarrollar sus actividades de manera óptima, segura y brindando un mayor
                  confort para los mismos.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
