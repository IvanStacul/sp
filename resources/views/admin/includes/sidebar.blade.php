<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.panel') }}" class="brand-link">
    <img src="{{ asset('admin/logo.png') }}" alt="Logo {{ env('APP_SHORT_NAME') }}" class="brand-image img-circle elevation-3"
      style="opacity: 0.8" />
    <span class="brand-text font-weight-light">{{ env('APP_SHORT_NAME') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="image">
        <img src="{{ asset('admin/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image" />
      </div>

      <div class="info">
        <a href="#" class="d-block"> Administrador </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search" />

        <div class="input-group-append">
          <button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @isset($links)
          @foreach ($links as $groupTitle => $group)
            @if ($group['type'] === 'group' && count($group['links']) > 0)
              <li class="nav-header font-weight-bold">{{ $groupTitle }}</li>
              @foreach ($group['links'] as $text => $link)
                <li @class(['nav-item', 'menu-open' => $link['active'] ?? false])>
                  <a href="{{ $link['url'] != '#' ? route($link['url']) : $link['url'] }}"
                    @class(['nav-link', 'active' => $link['active'] ?? false])>
                    <i class="nav-icon {{ $link['icon'] ?? '' }}"></i>
                    <p>
                      {{ $text }}
                      @isset($link['submenu'])
                        <i class="fas fa-angle-left right"></i>
                      @endisset
                      @isset($link['badge'])
                        <span class="right badge badge-{{ $link['badge']['class'] ?? '' }}">
                      {{ $link['badge']['text'] ?? '' }}
                    </span>
                      @endisset
                    </p>
                  </a>

                  @isset($link['submenu'])
                    <ul class="nav nav-treeview">
                      @foreach ($link['submenu'] as $submenuText => $submenuLink)
                        <li class="nav-item">
                          <a href="{{ $submenuLink['url'] != '#' ? route($submenuLink['url']) : $submenuLink['url'] }}"
                            @class(['nav-link', 'active' => $submenuLink['active'] ?? false])>
                            <i class="nav-icon {{ $submenuLink['icon'] ?? '' }}"></i>
                            <p>{{ $submenuText }}</p>
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  @endisset
                </li>
              @endforeach
            @endif
          @endforeach
        @endisset
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
