<div class="col-md-4 col-sm-6 mb-4">
    <div class="card h-100 shadow-sm overflow-hidden">
      <div class="card-header h-50 p-0 overflow-hidden">
        <img class="img-fluid rounded-0 w-100 h-100 object-fit-cover" src="{{ asset($plato->img_path) }}" alt="{{ $plato->nombre }}">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $plato->nombre }}</h5>
        <p class="card-text text-muted">{{ $plato->descripcion }}</p>
        <div class="d-flex justify-content-between align-items-end flex-grow-1">
          <p class="card-text fw-bold mb-0">{{ $plato->precio }}</p>
          <div>
            <form action="{{route('carrito.store')}}" method="POST"> 
              @csrf
              <input type="hidden" name="id_plato" value="{{$plato->id}}">
            <x-wireui-button type="submit" outline info label="Agregar al carrito" class="btn-sm" />
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>