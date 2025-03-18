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
          Secretaría de Planificación y Control de Gestión
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
                  Secretario de Gestión y Promoción Educativa
                </div>
                <h2 class="mt-2 text-2xl font-bold">Javier Polentarrutti</h2>
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
                <li>Coordinador de Proyectos Especiales</li>
                <li>Subsecretaría de Planificación, Seguimiento y Control de Gestión</li>
                <li>Subsecretaría de Planificación Urbana</li>
                <li>Subsecretaría de Regularización Dominial de Tierras</li>
                <li>Subsecretaría de Catastro y Relevamiento Territorial</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Definir el Plan de Gobierno junto con el Intendente Municipal, y acompañar a todas las áreas en su
                  implementación y en la elaboración de los planes operativos anuales.</li>
                <li>Realizar balances periódicos de la ejecución del plan para identificar oportunidades de mejora en
                  términos de planificación, ejecución e impacto.</li>
                <li>Elaborar en articulación con la Secretaría de Economía el presupuesto de las áreas de acuerdo al Plan
                  de Gobierno y hacer seguimiento de su ejecución.</li>
                <li>Coordinar la planificación y ejecución de todas las iniciativas, comprobar avances, evaluar impactos y
                  aportar soluciones para garantizar la correcta ejecución del Plan desde una mirada multidisciplinaria,
                  transparente e integral.</li>
                <li>Proporcionar al Intendente las herramientas metodológicas necesarias para el seguimiento de la
                  gestión, elaborando conjuntamente con las diferentes jurisdicciones un sistema de indicadores que
                  volcados a un tablero de control, permitan la adecuada evaluación de la ejecución de los programas y
                  metas que componen el Plan de Acción de Gobierno.</li>
                <li>Establecer, elaborar, analizar y verificar las metodologías, indicadores, criterios de decisión y
                  procedimientos a utilizar en la formulación y evaluación de los programas y proyectos de la
                  Administración.</li>
                <li>Diseñar e implementar, conjuntamente con la Secretaría de Economía, un plan de reducción y control
                  permanente de las erogaciones corrientes del Municipio.</li>
                <li>Efectuar el control del cumplimiento en la ejecución de los programas y proyectos de las Secretarías.
                </li>
                <li>Supervisar, organizar y administrar el inventario de programas y proyectos.</li>
                <li>Planificación, promoción y diseño de proyectos integrales de espacios urbanos públicos en áreas
                  estratégicas e intervenir activamente en la diagramación del tendido de las redes de infraestructura.
                </li>
                <li>Confeccionar y actualizar un inventario de hechos y obras que conformen el patrimonio de la ciudad.
                </li>
                <li>Análisis, verificación y evaluación de proyectos y obras de desarrollo urbano, asegurando la
                  compatibilidad con la planificación territorial, disposiciones medioambientales y normativa local de
                  edificación.</li>
                <li>Implementar acciones en defensa del patrimonio arquitectónico histórico, cultural y paisajístico de la
                  ciudad.</li>
                <li>Ordenar y controlar el crecimiento armónico de la ciudad en el marco de la Planificación Urbana,
                  priorizando el medio ambiente sano y un mejoramiento de la calidad de vida de los vecinos.</li>
                <li>Implementar acciones participativas y consultivas con la comunidad ante proyectos de obras de interés
                  urbano que incidan en el crecimiento de la ciudad y su ordenamiento físico y ambiental.</li>
                <li>Promoción y fortalecimiento de estrategias de desarrollo urbano sustentable, asistiendo a las
                  distintas áreas en materia de protección del medio ambiente.</li>
                <li>Aplicar las normas técnicas y administrativas para identificación, registro, valuación, reevaluación y
                  delimitación de los predios ubicados en el Municipio.</li>
                <li>Diseñar, formular y evaluar planes, programas y proyectos especiales de gran impacto territorial y
                  urbano, mediante la conformación de una Unidad Ejecutora de Proyectos, en la que intervendrán un equipo
                  de profesionales multidisciplinarios.</li>
                <li>Auxiliar a las dependencias y organismos públicos cuyas atribuciones o actividades en materia de
                  planeación, programación, o elaboración y realización de proyectos específicos del desarrollo estatal,
                  regional y municipal, requieran de los datos contenidos en el catastro.</li>
                <li>Confeccionar y actualizar el Catastro Geométrico, parcelario y jurídico de las propiedades inmuebles
                  de la ciudad y Fiscalizar y Atender los pedidos de mensura, subdivisión parcelaria y nivelación que sean
                  necesarios.</li>
                <li>Fiscalizar la subdivisión del suelo y el ensanche o apertura de nuevas calles públicas según las
                  normas vigentes.</li>
                <li>Atender los pedidos de mensura, subdivisión parcelaria y nivelación que sean necesarios.</li>
                <li>Intervenir en los procedimientos de regularización y acceso a la titularidad dominial en coordinación
                  con otras autoridades de aplicación de la normativa específica, coordinando acciones, pautas y criterios
                  con otros organismos involucrados.</li>
                <li>Crear y mantener actualizado un Banco de Tierras y movilizar suelo urbano para la regularización
                  urbana, vivienda y equipamiento social, y el reordenamiento urbano.</li>
                <li>Identificar, registrar, evaluar y categorizar predios de origen público y/o privado que fueren
                  considerados aptos para la concreción de planes y programas de desarrollo y mejoramiento del hábitat.
                </li>
                <li>Realizar la gestión de compra y/o expropiación de tierras en coordinación con la autoridad de
                  aplicación en la materia con destino a un fin social.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
