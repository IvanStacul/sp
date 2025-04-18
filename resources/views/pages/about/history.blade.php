@extends('pages.layouts.base')

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
@endpush

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/ciudad.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-7xl text-gray-50 md:mb-8">
          Ciudad
        </h2>
      </div>

      <div>
        <p class="text-xl text-gray-50">
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
            <img src="{{ asset('assets/img/bandera-de-la-ciudad.webp') }}" loading="lazy" alt="Bandera de la Ciudad"
              class="w-full object-cover object-center rounded-lg" />
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

        <div id="image-gallery">
          <div class="grid gap-3 lg:grid-cols-2">
            <div class="grid grid-cols-2 gap-3 lg:grid-cols-1">
              <figure style="  max-width: auto;" data-src="{{ asset('assets/img/forestal.webp') }}"
                data-caption="La llegada del Ferrocarril favoreció la colonización del interior chaqueño"
                data-fancybox="gallery">
                <img src="{{ asset('assets/img/forestal.webp') }}"
                  alt="La llegada del Ferrocarril favoreció la colonización del interior chaqueño"
                  class="rounded img-fluid img-thumbnail">
                <figcaption>La llegada del Ferrocarril favoreció la colonización del interior chaqueño</figcaption>
              </figure>

              <figure style="  max-width: auto;" data-src="{{ asset('assets/img/cte-fernandez.webp') }}"
                data-caption="Comandante Carlos D. Fernández fundador de Pcia. Roque Sáenz Peña" data-fancybox="gallery">
                <img src="{{ asset('assets/img/cte-fernandez.webp') }}"
                  alt="Comandante Carlos D. Fernández fundador de Pcia. Roque Sáenz Peña"
                  class="rounded img-fluid img-thumbnail">
                <figcaption>Comandante Carlos D. Fernández fundador de Pcia. Roque Sáenz Peña</figcaption>
              </figure>

            </div>


            <figure class="relative h-72 w-full sm:h-96 lg:h-full" data-fancybox="gallery"
              data-src="{{ asset('assets/img/cosechero.webp') }}">
              <img class="absolute left-0 top-0 w-full h-full rounded-xl object-cover"
                src="{{ asset('assets/img/cosechero.webp') }}" alt="Cosecha manual de algodón">
              <figcaption class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white text-sm p-2">
                Cosecha manual de algodón
              </figcaption>
            </figure>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <figure style="max-width: auto;" data-src="{{ asset('assets/img/desmotadora.webp') }}"
              data-caption="Antigua desmotadora de algodón empleada en los comienzos del ciclo algodonero Roque Sáenz Peña"
              data-fancybox="gallery">
              <img src="{{ asset('assets/img/desmotadora.webp') }}"
                alt="Antigua desmotadora de algodón empleada en los comienzos del ciclo algodonero Roque Sáenz Peña"
                class="rounded img-fluid img-thumbnail">
              <figcaption>Antigua desmotadora de algodón empleada en los comienzos del ciclo algodonero Roque Sáenz Peña
              </figcaption>
            </figure>

            <figure style="max-width: auto;" data-src="{{ asset('assets/img/familia-de-colonos-inmigrantes.webp') }}"
              data-caption="Inmigrantes procedentes de Europa Oriental arribados al Chaco" data-fancybox="gallery">
              <img src="{{ asset('assets/img/familia-de-colonos-inmigrantes.webp') }}"
                alt="Inmigrantes procedentes de Europa Oriental arribados al Chaco"
                class="rounded img-fluid img-thumbnail">
              <figcaption>Inmigrantes procedentes de Europa Oriental arribados al Chaco</figcaption>
            </figure>

            <figure style="max-width: auto;" data-src="{{ asset('assets/img/termales.webp') }}"
              data-caption="Baños termales previo a la remodelación de 1977" data-fancybox="gallery">
              <img src="{{ asset('assets/img/termales.webp') }}" alt="Baños termales previo a la remodelación de 1977"
                class="rounded img-fluid img-thumbnail">
              <figcaption>Baños termales previo a la remodelación de 1977</figcaption>
            </figure>

            <figure style="max-width: auto;" data-src="{{ asset('assets/img/banios-termales.webp') }}"
              data-caption="Baños termales" data-fancybox="gallery">
              <img src="{{ asset('assets/img/banios-termales.webp') }}" alt="Baños termales"
                class="rounded img-fluid img-thumbnail">
              <figcaption>Baños termales</figcaption>
            </figure>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const options = {
        Toolbar: {
          items: {
            download: {
              tpl: `<button class="f-button"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M3 14.25C3.41421 14.25 3.75 14.5858 3.75 15C3.75 16.4354 3.75159 17.4365 3.85315 18.1919C3.9518 18.9257 4.13225 19.3142 4.40901 19.591C4.68577 19.8678 5.07435 20.0482 5.80812 20.1469C6.56347 20.2484 7.56459 20.25 9 20.25H15C16.4354 20.25 17.4365 20.2484 18.1919 20.1469C18.9257 20.0482 19.3142 19.8678 19.591 19.591C19.8678 19.3142 20.0482 18.9257 20.1469 18.1919C20.2484 17.4365 20.25 16.4354 20.25 15C20.25 14.5858 20.5858 14.25 21 14.25C21.4142 14.25 21.75 14.5858 21.75 15V15.0549C21.75 16.4225 21.75 17.5248 21.6335 18.3918C21.5125 19.2919 21.2536 20.0497 20.6517 20.6516C20.0497 21.2536 19.2919 21.5125 18.3918 21.6335C17.5248 21.75 16.4225 21.75 15.0549 21.75H8.94513C7.57754 21.75 6.47522 21.75 5.60825 21.6335C4.70814 21.5125 3.95027 21.2536 3.34835 20.6517C2.74643 20.0497 2.48754 19.2919 2.36652 18.3918C2.24996 17.5248 2.24998 16.4225 2.25 15.0549C2.25 15.0366 2.25 15.0183 2.25 15C2.25 14.5858 2.58579 14.25 3 14.25Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16.75C12.2106 16.75 12.4114 16.6615 12.5535 16.5061L16.5535 12.1311C16.833 11.8254 16.8118 11.351 16.5061 11.0715C16.2004 10.792 15.726 10.8132 15.4465 11.1189L12.75 14.0682V3C12.75 2.58579 12.4142 2.25 12 2.25C11.5858 2.25 11.25 2.58579 11.25 3V14.0682L8.55353 11.1189C8.27403 10.8132 7.79963 10.792 7.49393 11.0715C7.18823 11.351 7.16698 11.8254 7.44648 12.1311L11.4465 16.5061C11.5886 16.6615 11.7894 16.75 12 16.75Z" fill="#ffffff"></path> </g></svg></button>`,
              click: () => {
                const src = Fancybox.getSlide().src;

                const a = document.getElementById("download");

                a.href = src;
                a.download = src.split("/").pop();
                a.click();

              },
            },
          },
          display: {
            left: ["infobar"],
            middle: [],
            right: ["download", "close"],
          },
        },
      };

      Fancybox.bind("[data-fancybox]", options);
    });
  </script>
@endpush
