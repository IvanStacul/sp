<div class="hidden lg:block">
  <div class="header-navs bg-gray-50">
    <div class="container">
      <div class="flex content-between flex-wrap lg:flex-nowrap lg:justify-between lg:items-center">
        <div class="logos">
          <div class="logo-item">
            <a href="{{ route('home') }}" class="logo block mt-2">
              <img src="{{ asset('assets/img/logo-municipalidad.webp') }}" alt="logo" class="w-52" />
              <span class="sr-only">Logo</span>
            </a>
          </div>
        </div>

        <nav class="main-navigation" aria-label="Main navigation">
          <div class="menu-main-menu-container">
            <ul class="menu nav-menu lg:flex lg:items-center lg:gap-1 xl:gap-2">
              <li class="menu-item lg:inline-flex lg:items-center has-link-icon">
                <a href="{{ route('home') }}" class="hover:!text-green-600 hover:!border-green-600">
                  <span>Inicio</span>
                </a>
              </li>

              <li class="menu-item group">
                <a href="{{ route('services.index') }}"
                  class="group-hover:!text-green-600 group-hover:!border-green-600">Servicios</a>
              </li>

              <li class="menu-item relative lg:inline-flex lg:items-center menu-item-has-children group z-10">
                <a href="" onclick="return false;" data-dropdown-placement="bottom-start"
                  data-dropdown-toggle="TramitesHover" data-dropdown-trigger="hover"
                  class="group-hover:!text-green-600 group-hover:!border-green-600">
                  Tramites
                </a>

                <button id="TramitesMenus" data-dropdown-toggle="TramitesHover"
                  class="submenu-btn flex-shrink-0 group-hover:!text-green-600">
                  <span><span class="sr-only">show submenu for "Our services"</span></span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <polyline points="208 96 128 176 48 96" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="16" />
                  </svg>
                </button>
                <!-- submenu start from left -->
                <div id="TramitesHover" class="submenu hidden lg:py-4 xl:py-5 2xl:py-6 rounded-bordered">
                  <div class="[&>div]:p-3 [&>div]:w-72 lg:flex lg:flex-wrap">
                    <div>
                      <ul class="space-y-1.5 xl:space-y-2 2xl:space-y-2.5" aria-labelledby="TramitesMenus">
                        <li class="menu-item">
                          <a href="https://apps.saenzpeña.gob.ar/Autogestion" class="hover:!text-green-600">Autogestión (impuestos)</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('guides.index') }}" class="hover:!text-green-600">Guía de trámites</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>

              <li class="menu-item group">
                <a href="{{ route('news.index') }}"
                  class="group-hover:!text-green-600 group-hover:!border-green-600">Noticias</a>
              </li>

              <li class="menu-item group">
                <a href="{{ route('pages.institutional.index') }}"
                  class="group-hover:!text-green-600 group-hover:!border-green-600">Institucional</a>
              </li>

              <li class="menu-item relative lg:inline-flex lg:items-center menu-item-has-children group z-10">
                <a href="" onclick="return false;" data-dropdown-placement="bottom-start"
                  data-dropdown-toggle="DocumentosHover" data-dropdown-trigger="hover"
                  class="group-hover:!text-green-600 group-hover:!border-green-600">
                  Documentos
                </a>

                <button id="DocumentosMenus" data-dropdown-toggle="DocumentosHover"
                  class="submenu-btn flex-shrink-0 group-hover:!text-green-600">
                  <span>
                    <span class="sr-only">mostrar submenú para "Documentos"</span>
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <polyline points="208 96 128 176 48 96" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="16" />
                  </svg>
                </button>
                <!-- submenu start from left -->
                <div id="DocumentosHover" class="submenu hidden lg:py-4 xl:py-5 2xl:py-6 rounded-bordered">
                  <div class="[&>div]:p-3 [&>div]:w-72 lg:flex lg:flex-wrap">
                    <div>
                      <ul class="space-y-1.5 xl:space-y-2 2xl:space-y-2.5" aria-labelledby="DocumentosMenus">
                        <li class="menu-item">
                          <a href="{{ route('ordinances.index') . '?category=ordenanzas' }}" class="hover:!text-green-600">Ordenanzas</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('ordinances.index') . '?category=ordenanzas-impositivas-y-tarifarias' }}" class="hover:!text-green-600">
                            Ordenanzas impositivas y tributarias
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('docs') }}" class="hover:!text-green-600">Documentos Oficiales y resoluciones</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>

              <li class="menu-item relative lg:inline-flex lg:items-center menu-item-has-children group z-10">
                <a href="" onclick="return false;" data-dropdown-placement="bottom-start"
                  data-dropdown-toggle="MeetHover" data-dropdown-trigger="hover"
                  class="group-hover:!text-green-600 group-hover:!border-green-600">
                  Conocé Sáenz Peña
                </a>

                <button id="MeetMenus" data-dropdown-toggle="MeetHover"
                  class="submenu-btn flex-shrink-0 group-hover:!text-green-600">
                  <span><span class="sr-only">show submenu for "Our services"</span></span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <polyline points="208 96 128 176 48 96" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                  </svg>
                </button>

                <div id="MeetHover" class="submenu hidden lg:py-4 xl:py-5 2xl:py-6 rounded-bordered">
                  <div class="[&>div]:p-3 [&>div]:w-72 lg:flex lg:flex-wrap">
                    <div>
                      <ul class="space-y-1.5 xl:space-y-2 2xl:space-y-2.5" aria-labelledby="MeetMenus">
                        <li class="menu-item">
                          <a href="{{ route('under-construction') }}" class="hover:!text-green-600">Turismo</a>
                        </li>
                        {{-- <li class="menu-item">
                          <a href="" onclick="return false;" class="hover:!text-green-600">Cultura</a>
                        </li> --}}
                        <li class="menu-item">
                          <a href="{{ route('about.history') }}" class="hover:!text-green-600">Historia</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Desktop end -->

<!-- Responsive -->
<div class="lg:hidden">
  <div class="py-2.5 lg:py-3">
    <div class="container">
      <div class="max-lg:flex max-lg:items-center justify-between">
        <div class="logos">
          <div class="logo-item">
            <a href="{{ route('home') }}" class="logo block">
              <img src="{{ asset('assets/img/logo-municipalidad.webp') }}" alt="logo" />
              <span class="sr-only">Logo</span>
            </a>
          </div>
        </div>

        <div class="header-top-right">
          <div>
            <div class="flex items-center gap-3">
              <button data-modal-target="openNavdd" data-modal-toggle="openNavdd"
                class="hamburger-icon text-aeblack-700">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                  <rect width="256" height="256" fill="none"></rect>
                  <line x1="40" y1="128" x2="216" y2="128" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                  <line x1="40" y1="64" x2="216" y2="64" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                  <line x1="40" y1="192" x2="216" y2="192" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                </svg>
                <span class="sr-only">Abrir menú principal</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="openNavdd" tabindex="-1" aria-hidden="true"
    class="responsive-menu !transform-none hidden [&_.main-navigation_.menu-item.active-page_a]:border-none [&_.accordion-active_svg]:rotate-180 max-lg:py-4 lg:hidden max-lg:bg-whitely-50 max-lg:fixed max-lg:inset-0 max-lg:w-full max-lg:[&_li_a]:w-full max-lg:[&_li_a]:py-2 max-lg:[&_.submenu-btn]:!absolute max-lg:[&_.submenu-btn]:end-0 max-lg:[&_.submenu-btn]:top-2 max-lg:[&_.submenu-btn]:w-6 max-lg:z-50 max-lg:flex-wrap max-lg:items-start max-lg:justify-start">
    <div class="w-full">
      <div class="w-full max-lg:px-4 flex items-center justify-between gap-4 mb-4">
        <a href="{{ route('home') }}">
          <img src="{{ asset('assets/img/logo-municipalidad.webp') }}" alt="logo" width="120" />
        </a>

        <div class="flex items-center gap-4">
          <button data-modal-hide="openNavdd">
            <svg aria-hidden="true" class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
              <rect width="256" height="256" fill="none" />
              <line x1="200" y1="56" x2="56" y2="200" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
              <line x1="200" y1="200" x2="56" y2="56" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
            </svg>
            <span class="sr-only">Cerrar menú principal</span>
          </button>
        </div>
      </div>
      <div class="max-lg:max-h-[calc(100vh_-_6.375rem)] max-lg:px-4 max-lg:overflow-auto">
        <nav class="main-navigation mb-4" aria-label="Main navigation">
          <div class="menu-main-menu-container">
            <ul id="navigation-dropdown-collapse" data-accordion="collapse" class="menu nav-menu">
              <li class="menu-item has-link-icon">
                <a href="{{ route('home') }}"> <span>Inicio</span> </a>
              </li>

              <li class="menu-item">
                <a href="{{ route('services.index') }}"> Servicios </a>
              </li>

              <li class="menu-item relative menu-item-has-children">
                <a href="" onclick="return false;"> Documentos </a>

                <button class="submenu-btn flex-shrink-0" id="accordionOurServices"
                  data-accordion-target="#accordion-collapse-service" aria-controls="accordion-collapse-service">
                  <span>
                    <span class="sr-only">mostrar submenú para "Documentos"</span>
                  </span>

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <polyline points="208 96 128 176 48 96" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                  </svg>
                </button>

                <!-- submenu start from left -->

                <div id="accordion-collapse-service" class="submenu hidden bg-transparent"
                  aria-labelledby="accordionOurServices">
                  <div class="[&>div]:p-3 [&_ul]:space-y-1.5">
                    <div>
                      <ul class="space-y-1.5 xl:space-y-2 2xl:space-y-2.5">
                        <li class="menu-item">
                          <a href="{{ route('ordinances.index') . '?category=ordenanzas' }}" class="hover:!text-green-600">
                            Ordenanzas
                          </a>
                        </li>

                        <li class="menu-item">
                          <a href="{{ route('ordinances.index') . '?category=ordenanzas-impositivas-y-tarifarias' }}" class="hover:!text-green-600">
                            Ordenanzas impositivas y tributarias
                          </a>
                        </li>

                        <li class="menu-item">
                          <a href="{{ route('docs') }}" class="hover:!text-green-600">
                            Documentos Oficiales y resoluciones
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>

              <li class="menu-item relative menu-item-has-children">
                <a href="" onclick="return false;">Trámites</a>

                <button class="submenu-btn flex-shrink-0" id="accordionTramites"
                  data-accordion-target="#accordion-collapse-tramites" aria-controls="accordion-collapse-tramites">
                  <span>
                    <span class="sr-only">
                      mostrar submenú para "Trámites"
                    </span>
                  </span>

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <polyline points="208 96 128 176 48 96" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                  </svg>
                </button>

                <!-- submenu start from left -->

                <div id="accordion-collapse-tramites" class="submenu hidden bg-transparent"
                  aria-labelledby="accordionTramites">
                  <div class="[&>div]:p-3 [&_ul]:space-y-1.5">
                    <div>
                      <ul class="space-y-1.5 xl:space-y-2 2xl:space-y-2.5">
                        <li class="menu-item">
                          <a href="{{ route('guides.index') }}" class="hover:!text-green-600">
                            Guía de trámites
                          </a>
                        </li>

                        <li class="menu-item">
                          <a href="https://apps.saenzpeña.gob.ar/Autogestion" class="hover:!text-green-600">
                            Autogestión (impuestos)
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>

              <li class="menu-item">
                <a href="{{ route('news.index') }}"> Noticias </a>
              </li>

              <li class="menu-item">
                <a href="{{ route('pages.institutional.index') }}"> Institucional </a>
              </li>

              <li class="menu-item relative menu-item-has-children">
                <a href="" onclick="return false;">Conocé Sáenz Peña</a>

                <button class="submenu-btn flex-shrink-0" id="accordionMeet"
                  data-accordion-target="#accordion-collapse-meet" aria-controls="accordion-collapse-meet">
                  <span>
                    <span class="sr-only">
                      mostrar submenú para "Conocé Sáenz Peña"
                    </span>
                  </span>

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <polyline points="208 96 128 176 48 96" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                  </svg>
                </button>

                <!-- submenu start from left -->

                <div id="accordion-collapse-meet" class="submenu hidden bg-transparent"
                  aria-labelledby="accordionMeet">
                  <div class="[&>div]:p-3 [&_ul]:space-y-1.5">
                    <div>
                      <ul class="space-y-1.5 xl:space-y-2 2xl:space-y-2.5">
                        <li class="menu-item">
                          <a href="{{ route('about.history') }}" class="hover:!text-green-600">Historia</a>
                        </li>

                        {{-- <li class="menu-item">
                          <a href="" onclick="return false;">Cultura</a>
                        </li> --}}

                        <li class="menu-item">
                          <a href="{{ route('under-construction') }}" class="hover:!text-green-600">Turismo</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Responsive end -->
