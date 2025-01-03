@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="https://v0.dev/placeholder.svg?height=400&width=1200" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <!-- overlay - start -->
    <!-- <div class="absolute inset-0 bg-green-400 mix-blend-multiply"></div> -->
    <!-- overlay - end -->

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-7xl text-gray-800 md:mb-8">
          Ciudad
        </h2>
      </div>

      <div>
        <p class="text-xl">
          Presidencia Roque Sáenz Peña se encuentra ubicada en el centro del Chaco, es la segunda ciudad más poblada de la
          provincia y cabecera del departamento Comandante Fernández. Es el principal centro algodonero en el país. Se
          fundó en el marco de la última campaña efectuada por el Ejército Argentino en el Chaco Austral.
        </p>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-5xl">
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">
            Fundación
          </h2>
        </div>

        <p class="text-lg !text-gray-800">Cuando se proyectaban las vías del ferrocarril Barranqueras a Metán se encargó
          al teniente coronel Pedro Amarante la búsqueda de terrenos aptos para la fundación de una colonia agrícola a
          partir del kilómetro 120 de dichas vías. Tras acampar en el km 177, el teniente coronel Carlos D. Fernández
          relevó a Amarante, y al parecerle inapropiado el lugar para el asentamiento resolvió desplazar el mismo al km
          173, basándose en sus propias exploraciones y en el informe del Ingeniero Antonio Schulz.</p>
        <p class="text-lg !text-gray-800">El asentamiento se realizó en el Ensanche Sur, pero las primeras 100 manzanas
          comenzaron a delinearse en el sector norte. Los solares eran de un cuarto de manzana (cada una de 100 metros de
          lado), y aquellos que no fueron reservados como espacios o edificios públicos, fueron vendidos a los pobladores.
          Los primeros habitantes fueron seis españoles procedentes de Resistencia, quienes recibieron su título de
          propiedad de manos de Fernández el 1° de marzo de 1912, fecha que se toma como fundación de la ciudad.</p>
        <p class="text-lg !text-gray-800">Poco tiempo después Fernández viajó a Buenos Aires para solicitarle al
          Presidente Roque Sáenz Peña que el poblado llevase su nombre. El 24 de octubre de 1912 el “Km 173” fue bautizado
          como Presidencia Roque Sáenz Peña.</p>

        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">
            Población
          </h2>
        </div>

        <p class="text-lg !text-gray-800">Según el último censo del INDEC de 2010, la población urbana de Sáenz Peña
          asciende a 89.882 habitantes. Sin embargo, el ritmo de crecimiento que ha tenido la ciudad en las últimas
          décadas permite intuir que la población actual supera ampliamente los 100.000 habitantes, a los que se suman
          varios miles más que transitan todos los días, dada su ubicación estratégica.</p>
        <p class="text-lg !text-gray-800">Por su población, Sáenz Peña es la segunda ciudad de la provincia del Chaco, y
          la más poblada de todo el NEA que no sea capital de provincia.</p>

        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">
            Bandera de la Ciudad
          </h2>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
          <div>
            <p class="text-lg !text-gray-800">En el 101° aniversario de su fundación, se presentó oficialmente la bandera
              de
              la ciudad, aprobada por ordenanza municipal N° 7519. Su diseño surgió de un concurso en el cual participaron
              los
              habitantes de municipio.</p>
          </div>

          <div>
            <img src="https://saenzpena.gob.ar/wp-content/uploads/2021/07/bandera-de-la-ciudad.jpg" loading="lazy"
              alt="Bandera de la Ciudad" class="w-full object-cover object-center rounded-lg" />
          </div>
        </div>

        <div>
          <p class="text-lg !text-gray-800">Respecto del significado y los atributos de la bandera municipal, pueden
            mencionarse:</p>

          <ul class="list-disc list-outside space-y-5 ps-5 text-lg text-gray-800">
            <li class="ps-2">La franja blanca representa al algodón, uno de los recursos económicos más importantes en
              la
              historia de la ciudad y del territorio chaqueño.</li>
            <li class="ps-2">La franja verde hace alusión a los campos productivos característicos de Sáenz Peña y al
              incalculable valor ecológico del monte autóctono y del Complejo Ecológico Municipal, el pulmón verde de la
              ciudad.</li>
            <li class="ps-2">La franja azul celeste representa a las aguas termales, ubicadas en el núcleo urbano, como
              un
              manantial de salud reforzando el blanco y azul celeste la pertenencia la provincia y a la Nación Argentina.
            </li>
            <li class="ps-2">Sobre el campo blanco el símbolo, compuesto por tres signos representativos de la historia
              de
              la ciudad: las vías fueron forjadas del municipio, representan su origen cuya identidad se consolida a
              partir
              de la pluralidad cultural que aúna en un destino común a criollos, inmigrantes y pueblos originarios.</li>
            <li class="ps-2">El capullo de algodón como símbolo de progreso ubicado en el centro, así como la ciudad se
              sitúa en el corazón del territorio chaqueño, donde se extienden las hectáreas de campos de algodón. Las
              líneas
              onduladas evocan la tranquilidad de las aguas termales, que poseen un gran valor de identidad para la ciudad
              y
              como su centro de atracción turística.</li>
          </ul>
        </div>

        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">
            Vías de Comunicación
          </h2>
        </div>

        <p class="text-lg !text-gray-800">Sáenz Peña se encuentra atravesada por las rutas nacionales 16 y 95, ambas
          pavimentadas, convirtiéndose en un centro estratégico por su cercanía a gran parte de las poblaciones chaqueñas.
          La ruta 16 es la más importante, comunicándola al sudeste con Quitilipi y Resistencia. Al noroeste la enlaza con
          Avia Terai y la Provincia de Salta. La ruta 95 la vincula al norte con Tres Isletas y la Provincia de Formosa, y
          al sur con Villa Ángela y la Provincia de Santa Fe.</p>
        <p class="text-lg !text-gray-800">Las vías del Ramal C3 del Ferrocarril General Belgrano se encuentran activas,
          transportando ocasionalmente vagones de carga de la empresa estatal Trenes Argentinos Cargas.36​ Existe un
          servicio de pasajeros uniendo esta ciudad con Chorotis, al sudoeste de la provincia, proporcionado por la
          empresa ferroviaria estatal Trenes Argentinos Operaciones.37​</p>
        <p class="text-lg !text-gray-800">El Aeropuerto de Presidencia Roque Sáenz Peña fue inaugurado en 1998. Entre 1999
          y 2002 tuvo en diferentes períodos vuelos regulares de Línea Aérea de Entre Ríos y Aerolíneas Argentinas Express
          (Aerovip), los cuales no pudieron mantenerse por mucho tiempo. Recién en 2009 volvió a contar con vuelos
          regulares tras la reapertura de la aerolínea Aerochaco, la cual presentó quiebra a finales del año 2013,
          financiada por el Estado provincial.</p>
        <p class="text-lg !text-gray-800">En la actualidad, el aeropuerto se utiliza solamente para vuelos chárter o
          sanitarios.</p>
        <p class="text-lg !text-gray-800">La ciudad espera las inversiones necesarias para que su aeropuerto vuelva a
          estar operativo para vuelos regulares que conecten a todo el interior chaqueño con el resto del país. </p>

        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">
            Barrios de la ciudad
          </h2>
        </div>

        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">
            Ciudad Termal
          </h2>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
          <div>
            <p class="text-lg !text-gray-800">Se trata de la manzana 60. Los solares “a” y “b”, en los que hoy están el
              casino y el hotel figuran como “Reserva Mercado” en un mapa de la década del 20. (el primer mapa de Sáenz
              Peña se halla extraviado). Toda la manzana figura como Plaza Juan Bautista Alberdi en un mapa de 1938,
              firmado por el Presidente del Concejo Municipal (figura equivalente al Intendente actual), don Benito
              Campos.</p>
            <p class="text-lg !text-gray-800">Fue siempre espacio municipal. De allí que, en 1937, a raíz de una
              calamitosa y angustiante sequía y de la solicitud de ayuda al gobierno nacional, al llegar a Sáenz Peña un
              especial equipo perforador se eligiera este lugar para efectuar los trabajos de perforación.</p>
            <p class="text-lg !text-gray-800">El agua obtenida en esas operaciones fue calificada como “no potable” y se
              desechó como útil para el consumo humano. Se reservó para riego de las calles. Que eran en su totalidad de
              tierra.</p>
            <p class="text-lg !text-gray-800">La sequía cesó con una abundante lluvia que vino a dar alivio a los sufridos
              saenzpeñenses de entonces, muchos de los cuales creyeron que tal lluvia fue el resultado de la llegada de
              Don Orione a nuestra ciudad.</p>
            <p class="text-lg !text-gray-800">Entre 1937 y 1941 las aguas perdieron protagonismo. Allí estaban, sin que se
              les diera mayor importancia saliendo de un pozo semi surgente. Sin embargo, a lo largo de ese tiempo se
              producen una serie de hechos y existen versiones y anécdotas diferentes, relacionadas con el tema.</p>
            <p class="text-lg !text-gray-800">El camión regador municipal fue el primero en picarse y luego todas las
              superficies de chapa que recibían parte de esta agua (cenefas, automóviles, etc.).</p>
            <p class="text-lg !text-gray-800">La cuneta que llevaba el agua hacia la avenida 28 (el pozo era
              semi-surgente, por lo que el agua corría) se presentaba blanca de salitre; una anécdota cuenta que una
              viejita bañaba a su perro, que sufría de sarna, y que éste en pocos días se curó.</p>
          </div>
          <div>
            <p class="text-lg !text-gray-800">El Ingeniero Viapiano que vino para la construcción del Mercado Municipal y
              que a su vez construyó el Hotel Asturias, se alojaba en el viejo Hotel Asturias (antes Oviedo) de la avenida
              1. Viapiano era conocedor de otras aguas termales del país y a través de conversaciones con Alfonso
              González, dueño del hotel, se entusiasma y decide visitar el lugar. Viapiano y González fueron los primeros
              en construir una piecita que “guardaba” el pozo semi-surgente, adonde entraban a bañarse y a respirar el
              vapor del agua.</p>
            <p class="text-lg !text-gray-800">Por otro lado, también en la historia local, aparece Julio Oscherov,
              Secretario del Municipio. Oscherov narra que sostuvo conversaciones con familias checas que en su lugar de
              origen tenían aguas termales y comparaban aquellas con éstas. Osacherov llamó la atención del Intendente Dr.
              José Pavlotzky, quien llenó una damajuana de 10 litros del agua del pozo semisurgente y personalmente la
              llevó a Bs. As. a fin de encargar el análisis correspondiente. Era 1941.</p>
            <p class="text-lg !text-gray-800">Fue entonces que supimos que teníamos aguas curativas en Sáenz Peña.</p>
            <p class="text-lg !text-gray-800">Pavlotzki, médico, se dedicó desde ese momento al Termalismo. Valoró en toda
              su magnitud la importancia de este descubrimiento, hizo proyectos adelantados a su tiempo, entre ellos la
              construcción de una pileta de aguas termales. ¡En la década del 40!</p>
            <p class="text-lg !text-gray-800">En 1970, comprendiendo la Municipalidad que no podría nunca, con recursos
              propios, construir un hotel de importancia regional como para explotar las aguas termales turísticamente,
              resolvió por ordenanza y con acuerdo del Ejecutivo Provincial vender parte de la manzana 60 a Lotería
              Chaqueña donde hoy funciona el Hotel Gualok.</p>
            <p class="text-lg !text-gray-800">Desde entonces, el Complejo Termal, gestionado por la Municipalidad, fue
              creciendo en los servicios que presta convirtiéndose en un referente regional en la materia y recibiendo a
              turistas de toda la provincia.</p>
          </div>
        </div>

        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl">
            Sáenz Peña Ayer
          </h2>
        </div>

        <figure>
          <img class="w-full object-cover rounded-xl"
            src="https://saenzpena.gob.ar/wp-content/uploads/2021/07/Forestal.jpg" alt="Blog Image">
          <figcaption class="mt-3 text-xl text-center text-gray-800 ">
            La llegada del Ferrocarril favoreció la colonización del interior chaqueño
          </figcaption>
        </figure>
      </div>
    </div>
  </section>
@endsection
