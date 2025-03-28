@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/sp-bus.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-7xl text-gray-50 md:mb-8">
          Transporte Público
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-4xl">
      <h3 class="text-2xl font-bold text-gray-800">Recorrido de Transporte Urbano</h3>

      {{-- 4 columnas 2 filas --}}
      <div class="grid grid-cols-2 gap-4 mt-4">
        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800">RAMAL "D" (IDA)</h4>
          <p class="text-base !text-gray-800">
            Inicia su recorrido en calle 31″
            "entre 30 y 32,Avenida Malvinas Argentinas (28), calle Pueyrredón (25, Avenida Hipólito lrigoyen (2), López y
            Planes (21), 26 de Julio de 1956 (321) calle"
            "F. Canteros 304 (000), calle Sor. M. Coppa (319), Avellaneda (19), calle Mariano Moreno (14), cruzando Pasaje
            Solidaridad (Paso Nivel FFCC-c14) ingresando al Ensanche Sur de la ciudad,Avenida Juan Manuel de Rosas (101),
            ingresa al Barrio Tiro Federal,Avenida 48, Lavalle (107), Escuela de"
            "vidrio, calle 36, Avenida Carlos Gardel 113 (13)."
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800">RAMAL “D” (REGRESO)</h4>
          <p class="text-base !text-gray-800">
            calle Don Orione 120 (20),”
            “calle Lavalle 107 (7), calle Comandante Fernández 112 (12), San Martín (12), calle Saavedra (3), calle
            Rivadavia (16), calle Superiora Palmira (17), calle Las Heras (4), calle López y Planes (21) 26 de Julio de
            1956 (321), calle F. Canteros 304 (000), calle Sor. M.H.Coppa (319), Avellaneda (19), San Martin (12),
            Mauricio Jajan (27), Avenidas Malvinas”
            “Argentinas (28), calle 25, calle 32, calle 31 FINALIZA”
            EL RECORRIDO.
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800">RAMAL “E” (IDA)</h4>
          <p class="text-base !text-gray-800">
            Inicia su recorrido en Ruta”
            “Nacional 16, Ruta Nacional N°95, calle Juan Alberdi (317), calle 326,Misiones (325), Eva Perón 320 (14), John
            Kennedy (309), lberus (0), por Catamarca (7) Avenida Hipólito lrigoyen (2),”
            “Avenida Sarmiento (1), Güemes (8), Superiora Palmira (17), Las Heras (4), Calle López y Planes (21), 26 de
            Julio 1956 (321), F. Canteros 304 (000), Calle Sor M.Coppa 319,Avellaneda (19), San Martin (12), M. Jajan
            (27), Avenida Malvinas Argentinas (28), Pueyrredón (25), Ejército de los Andes (36), República de Venezuela,
            Estado Español (30),”
            República de Costa Rica.
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800">RAMAL “E” (REGRESO)</h4>
          <p class="text-base !text-gray-800">
            República de Italia,Ejercito”
            “de los Andes (36), Ejército de los Andes (36), Pueyrredón (25), Avenida Malvinas Argentinas (28),Rodríguez
            Peña (29), M.Moreno (14), Calle López y Planes (21), 26 de Julio 1956 (321), F.”
            “Canteros 304 (000), Sor M.Coppa (319), Avellaneda (19), Belgrano (10), Avenida Sarmiento (1), Güemes (8), 9
            de Julio (9), John Kennedy (309),”
            “calle Eva Perón 320 (4), Misiones 325, calle”
            “326(20), Juan B. Alberdi 317 (17), Ruta Nacional Nº 16, donde FINALIZA EL RECORRIDO.”
          </p>
        </div>

        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800"> RAMAL “A”(IDA) </h4>
          <p class="text-base !text-gray-800">
            Inicia su recorrido en Bº Solidario,”
            “calle 63 y 24, por esta calle hasta, Coronel Rostagno (51) hasta República deItalia (36), hacia el Sur por
            Avenida Los Españoles (33), Avenida Malvinas Argentinas (28), López y Planes (21), 26 de Julio de 1956 (321),
            F. Canteros 304 (000) por calle Sor. M.H.”
            “Coppa (319), Avellaneda (19), calle Belgrano (10),”
            “Avenida Sarmiento (1), calle Mariano Moreno (14), Pasaje Solidaridad (Paso a Nivel FFCC-c. 14),”
            “ingresando al Ensanche Sur de la ciudad,Avenida Juan M.de Rosas (101), calle Cdte.Fernández 112 (12), Ruta
            Nacional Nº 16,por esta hasta calle Valdez 212, calle 225, calle Vuelta de Obligado (220), pasando por el”
            “barrio San Cayetano, continúa hasta Ruta 95.”
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800"> RAMAL “A” (REGRESO) </h4>
          <p class="text-base !text-gray-800">
            Ruta 95, Zoológico, rotonda,”
            “colectora Norte, calle Monseñor Di Stefano (212) calle B.”
            “Franklin 207 (7), Carlos Janik (000), Rafael Obligado (5), Sargento Cabral (4), Colectora Norte, Comandante
            Fernandez (12), continúa por San Martín (12) hasta calle Chacabuco (5), continúa por calle Güemes (8), calle
            Superiora Palmira (17), calle Las Heras (4), calle López y Planes (21), 26 de julio de 1956 (321), calle F.
            Canteros”
            “304 (000), calle Sor. M.H.Coppa (319), Avellaneda (19), Calle San Martín (12), calle Brown (23), Avenida
            Malvinas Argentinas (28), calle Avenida Los Españoles (33), calle Ejército de los Andes (36), calle República
            de”
            “Italia (36), calle Puigbó Vilaseca (55), por esta hasta calle República Federativa Alemana (34) donde
            FINALIZA RECORRIDO.
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800"> RAMAL “B” (IDA) </h4>
          <p class="text-base !text-gray-800">
            Inicia su recorrido en Bº Solidario,”
            “calle 24 y 63, girando en el Cementerio y retomando la calle 12, ingresando por la calle 51 hasta calle 24 y
            61, por la 24 hasta calle 61, calle 1ºde Marzo (12), Gendarmería Nacional (51-351), Ruta Nacional 95, calle
            Leandro N. Alem (341), calle 304 (000), Avenida Cristóbal Colón (333), Avenida Juan D. Perón (33), Avenida
            Malvinas Argentinas (28), calle 9 de Julio (9), Rivadavia (16), Bº Mitre”
            “(13), Belgrano (10), Avenida Sarmiento (1), Pasaje Solidaridad (paso nivel FFCC calle 14) ingresando al
            Ensanche Sur, Calle Azcuénaga (114), Calle Rep.”
            “Checa 11,Cdte.Fernández (112), Capitán Muñiz”
            (112)


          </p>
        </div>
        <div class="flex flex-col gap-2">
          <h4 class="text-lg font-bold text-gray-800"> RAMAL “B” (REGRESO) </h4>
          <p class="text-base !text-gray-800">
            Capitán Muñiz (112), calle”
            “137 Bº Mitre,Calle 128 Bº Matadero, Ruta Nacional 16 (colectora Sur), Calle Cdte.Fernández (112), san Martin
            (12), Avellaneda (19), Pringles (18), 25 de Mayo (11), Avenida Malvinas Argentinas (28),”
            “Avenida Juan D. Perón (33), Avenida Cristóbal Colón (333), calle 304 (000), calle Leandro N.Alem (341),),
            Ruta Nacional 95,Gendarmería Nacional (351), calle 1° de Marzo (12), calle 61,calle 24,por”
            “esta hasta calle 63, donde FINALIZA EL RECORRIDO.”
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
