@extends('admin.layouts.app')

@section('content-title', 'Editar Comercio')

@section('main-content')
  <div class="row">
    <div class="col-md-8">
      <form action="{{ route('admin.shops.update', $shop) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Información básica -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Información Básica</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Nombre del Comercio *</label>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                     value="{{ old('name', $shop->name) }}" required>
              @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="address">Dirección *</label>
              <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                     value="{{ old('address', $shop->address) }}" required>
              @error('address')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="category">Categoría *</label>
                  <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" required>
                    <option value="">Seleccionar categoría</option>
                    @foreach(\App\Models\Shop::CATEGORIES as $key => $label)
                      <option value="{{ $key }}" {{ old('category', $shop->category) === $key ? 'selected' : '' }}>
                        {{ $label }}
                      </option>
                    @endforeach
                  </select>
                  @error('category')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                         value="{{ old('email', $shop->email) }}">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="description">Descripción</label>
              <textarea name="description" id="description" rows="3"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $shop->description) }}</textarea>
              @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>

        {{-- Información de contacto --}}
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Información de Contacto</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Teléfonos</label>
              <div id="phones-container">
                @php
                  $phones = old('phones', $shop->phones ?? []);
                  if (empty($phones)) $phones = [''];
                @endphp
                @foreach($phones as $index => $phone)
                  <div class="input-group mb-2">
                    <input type="text" name="phones[]" value="{{ $phone }}" class="form-control" placeholder="0364 442-1234">
                    <div class="input-group-append">
                      @if($index === 0)
                        <button type="button" class="btn btn-success" onclick="addPhone()">
                          <i class="fas fa-plus"></i>
                        </button>
                      @else
                        <button type="button" class="btn btn-danger" onclick="removePhone(this)">
                          <i class="fas fa-minus"></i>
                        </button>
                      @endif
                    </div>
                  </div>
                @endforeach
              </div>
              @error('phones')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label>Celulares</label>
              <div id="mobiles-container">
                @php
                  $mobiles = old('mobiles', $shop->mobiles ?? []);
                  if (empty($mobiles)) $mobiles = [''];
                @endphp
                @foreach($mobiles as $index => $mobile)
                  <div class="input-group mb-2">
                    <input type="text" name="mobiles[]" value="{{ $mobile }}" class="form-control" placeholder="0364 15 123456">
                    <div class="input-group-append">
                      @if($index === 0)
                        <button type="button" class="btn btn-success" onclick="addMobile()">
                          <i class="fas fa-plus"></i>
                        </button>
                      @else
                        <button type="button" class="btn btn-danger" onclick="removeMobile(this)">
                          <i class="fas fa-minus"></i>
                        </button>
                      @endif
                    </div>
                  </div>
                @endforeach
              </div>
              @error('mobiles')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="whatsapp">WhatsApp</label>
              <input type="text" name="whatsapp" id="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror"
                     value="{{ old('whatsapp', $shop->whatsapp) }}" placeholder="5493641234567">
              <small class="form-text text-muted">Incluir código de país (ej: 5493641234567)</small>
              @error('whatsapp')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>

        {{-- Horarios de atención --}}
        {{-- <div class="card">
          <div class="card-header">
            <h3 class="card-title">Horarios de Atención</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="opening_time">Hora de Apertura</label>
                  <input type="time" name="opening_time" id="opening_time"
                         class="form-control @error('opening_time') is-invalid @enderror"
                         value="{{ old('opening_time', $shop->opening_time?->format('H:i')) }}">
                  @error('opening_time')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="closing_time">Hora de Cierre</label>
                  <input type="time" name="closing_time" id="closing_time"
                         class="form-control @error('closing_time') is-invalid @enderror"
                         value="{{ old('closing_time', $shop->closing_time?->format('H:i')) }}">
                  @error('closing_time')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Días de Atención</label>
              <div class="row">
                @php
                  $days = [
                    'monday' => 'Lunes',
                    'tuesday' => 'Martes',
                    'wednesday' => 'Miércoles',
                    'thursday' => 'Jueves',
                    'friday' => 'Viernes',
                    'saturday' => 'Sábado',
                    'sunday' => 'Domingo'
                  ];
                  $selectedDays = old('opening_days', $shop->opening_days ?? []);
                @endphp
                @foreach($days as $key => $label)
                  <div class="col-md-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="opening_days[]" value="{{ $key }}"
                             class="custom-control-input" id="day-{{ $key }}"
                             {{ in_array($key, $selectedDays) ? 'checked' : '' }}>
                      <label class="custom-control-label" for="day-{{ $key }}">{{ $label }}</label>
                    </div>
                  </div>
                @endforeach
              </div>
              @error('opening_days')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div> --}}

        {{-- Detalles adicionales --}}
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Detalles Adicionales</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="additional_details">Información Adicional</label>
              <textarea name="additional_details" id="additional_details" rows="4"
                        class="form-control @error('additional_details') is-invalid @enderror"
                        placeholder="Servicios especiales, instalaciones, información importante...">{{ old('additional_details', $shop->additional_details) }}</textarea>
              <small class="form-text text-muted">Esta información se mostrará en el modal de detalles</small>
              @error('additional_details')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>

        {{-- Botones de acción --}}
        <div class="row mb-8">
          <div class="col-12">
            <button type="submit" class="btn btn-primary float-right">Actualizar Comercio</button>
            <a href="{{ route('admin.shops.index') }}" class="btn btn-secondary mr-4 float-right">Cancelar</a>
          </div>
        </div>
      </form>
    </div>

    {{-- Columna lateral --}}
    <div class="col-md-4">
      {{-- Estado y orden --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Estado</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <div class="custom-control custom-switch">
              <input type="checkbox" name="is_active" value="1" class="custom-control-input" id="is_active"
                     {{ old('is_active', $shop->is_active) ? 'checked' : '' }}>
              <label class="custom-control-label" for="is_active">Comercio activo</label>
            </div>
          </div>

          <div class="form-group">
            <label for="sort_order">Orden de visualización</label>
            <input type="number" name="sort_order" id="sort_order" class="form-control @error('sort_order') is-invalid @enderror"
                   value="{{ old('sort_order', $shop->sort_order) }}" min="0">
            <small class="form-text text-muted">Mayor número = aparece primero</small>
            @error('sort_order')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>

      {{-- Imagen --}}
      {{-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Imagen</h3>
        </div>
        <div class="card-body">
          @if($shop->image)
            <div class="form-group">
              <label>Imagen actual:</label>
              <div class="text-center">
                <img src="{{ asset('storage/' . $shop->image) }}" alt="{{ $shop->name }}"
                     class="img-fluid rounded" style="max-width: 200px;">
              </div>
            </div>
          @endif

          <div class="form-group">
            <label for="image">{{ $shop->image ? 'Cambiar imagen' : 'Imagen del comercio' }}</label>
            <div class="custom-file">
              <input type="file" name="image" id="image" class="custom-file-input @error('image') is-invalid @enderror" accept="image/*">
              <label class="custom-file-label" for="image">Elegir archivo</label>
            </div>
            <small class="form-text text-muted">JPG, PNG, GIF. Máximo 2MB.</small>
            @error('image')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div> --}}

      {{-- Redes sociales --}}
      {{-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Redes Sociales</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="website">Sitio Web</label>
            <input type="url" name="website" id="website" class="form-control @error('website') is-invalid @enderror"
                   value="{{ old('website', $shop->website) }}" placeholder="https://www.ejemplo.com">
            @error('website')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" id="facebook" class="form-control @error('facebook') is-invalid @enderror"
                   value="{{ old('facebook', $shop->facebook) }}" placeholder="usuario_facebook">
            @error('facebook')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" id="instagram" class="form-control @error('instagram') is-invalid @enderror"
                   value="{{ old('instagram', $shop->instagram) }}" placeholder="@usuario_instagram">
            @error('instagram')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div> --}}

      {{-- Coordenadas GPS --}}
      {{-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ubicación GPS</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="latitude">Latitud</label>
            <input type="number" name="latitude" id="latitude" class="form-control @error('latitude') is-invalid @enderror"
                   value="{{ old('latitude', $shop->latitude) }}" step="0.0000001" placeholder="-26.795220">
            @error('latitude')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="longitude">Longitud</label>
            <input type="number" name="longitude" id="longitude" class="form-control @error('longitude') is-invalid @enderror"
                   value="{{ old('longitude', $shop->longitude) }}" step="0.0000001" placeholder="-60.445286">
            @error('longitude')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div> --}}

      {{-- Fechas --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Información del Registro</h3>
        </div>
        <div class="card-body">
          <small class="text-muted">
            <strong>Creado:</strong> {{ $shop->created_at->format('d/m/Y H:i') }}<br>
            <strong>Última actualización:</strong> {{ $shop->updated_at->format('d/m/Y H:i') }}
          </small>
        </div>
      </div>

      {{-- Eliminar comercio --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Zona de Peligro</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.shops.destroy', $shop) }}" method="POST"
                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este comercio? Esta acción no se puede deshacer.')"
                class="text-center">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <i class="fas fa-trash"></i> Eliminar Comercio
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
function addPhone() {
  const container = document.getElementById('phones-container');
  const div = document.createElement('div');
  div.className = 'input-group mb-2';
  div.innerHTML = `
    <input type="text" name="phones[]" class="form-control" placeholder="0364 442-1234">
    <div class="input-group-append">
      <button type="button" class="btn btn-danger" onclick="removePhone(this)">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  `;
  container.appendChild(div);
}

function removePhone(button) {
  button.closest('.input-group').remove();
}

function addMobile() {
  const container = document.getElementById('mobiles-container');
  const div = document.createElement('div');
  div.className = 'input-group mb-2';
  div.innerHTML = `
    <input type="text" name="mobiles[]" class="form-control" placeholder="0364 15 123456">
    <div class="input-group-append">
      <button type="button" class="btn btn-danger" onclick="removeMobile(this)">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  `;
  container.appendChild(div);
}

function removeMobile(button) {
  button.closest('.input-group').remove();
}

// Para mostrar el nombre del archivo seleccionado
document.getElementById('image').addEventListener('change', function(e) {
  var fileName = e.target.files[0].name;
  var nextSibling = e.target.nextElementSibling;
  nextSibling.innerText = fileName;
});
</script>
@endpush
