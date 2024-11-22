<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <!-- resources/views/carrito.blade.php -->
    <div class="min-vh-100 py-5">

        <div class="text-end m-3">
            <x-wireui-button outline red label="Pedidos Pendientes" href="{{route('carrito.pendientes'),1}}" />
        </div>
        @if ($carritoItems->count() == 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <x-wireui-alert title="No has agregado ningún producto al carrito!" warning class="shadow-sm" />
                </div>
            </div>
        </div>
        @else
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h1 class="text-center mb-4">Carrito de Compras</h1>
                    @if ($message = Session::get('success'))
                    <div class="mb-4">
                        <x-modal-alert></x-modal-alert>
                    </div>
                    @endif
                </div>
                <!-- Botón para ver más -->
                <div class="">
                    <a href="#">
                        <x-wireui-button info label="Ver más platos" right-icon='plus' href="{{route('menu.index')}}" />
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carritoItems as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ $item->plato->img_path }}" alt="{{ $item->plato->nombre }}"
                                                    class="img-thumbnail"
                                                    style="width: 100px; height: 100px; object-fit: cover;">
                                            </td>
                                            <td class="fw-bold">{{ $item->plato->nombre }}</td>
                                            <td class="text-muted">{{ $item->plato->descripcion }}</td>
                                            <td class="fw-bold text-primary">${{ number_format($item->plato->precio, 2)
                                                }}</td>

                                            <td class="fw-bold text-primary">{{ number_format($item->cantidad)}}</td>
                                            <td>
                                                <form action="{{route('carrito.destroy', $item->id)}}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-wireui-button light orange label="Eliminar" right-icon="trash"
                                                        interaction="negative" type="submit" class="btn-sm" onclick="event.preventDefault(); 
                                                                     confirm('¿Estás seguro de querer eliminar este plato del carrito?') ? 
                                                                     this.closest('form').submit() : false;" />
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card bg-primary text-white shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h3 class="mb-0">Total</h3>
                            <h3 class="mb-0">${{ number_format($totalPrecio, 2) }}</h3>
                        </div>
                    </div>
                    <div class="container text-center  mt-4">
                        <form action="{{ route('carrito.store') }}" method="POST"
                            class="p-4 border rounded shadow-sm bg-light">
                            @csrf
                            <input type="hidden" name="success" value="true">


                            <!-- Seleccionar Dirección -->
                            <div class="mb-3 d-flex gap-2">
                                <label for="direccion" class="form-label fw-bold">Dirección de Envío</label>
                                <select id="direccion" name="direccion" class="form-select" required>
                                    <option value="" disabled selected>Selecciona una dirección</option>
                                    @if ($direcciones)
                                    @foreach ($direcciones as $direccion)
                                    <option value="{{ $direccion->id }}">{{ $direccion->direccion }}</option>
                                    @endforeach
                                    @endif
                                </select>
                                <x-wireui-button outline label="Agregar una nueva direccion" href="{{route('direcciones.add')}}"/>
                            </div>

                            <div class="mb-3">
                                <label for="nota" class="form-label fw-bold">Nota del Pedido</label>
                                <textarea id="nota" name="nota" class="form-control" rows="3"
                                    placeholder="Agrega una nota para tu pedido..." style="resize: none;">
                                    </textarea>
                            </div>
                            <div class="text-center mt-4">
                                <x-wireui-button label="Realizar el pedido" info type="submit"></x-wireui-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</x-app-layout>