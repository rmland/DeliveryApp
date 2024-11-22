<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pedidos pendientes
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        @if ($message = Session::get('success'))

        <x-modal-alert></x-modal-alert>
        @endif

        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Gestión de Pedidos</h4>
                <span class="badge bg-light text-dark">Total: {{ $pedidos->count() }} Pedidos</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Dirección</th>
                                <th>Notas</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pedidos as $pedido)
                            <tr class="text-center">
                                <td class="fw-bold text-primary">#{{ $pedido->id }}</td>
                                <td>{{ $pedido->cliente->name ?? 'N/A' }}</td>
                                <td>
                                    <small class="text-muted">
                                        {{ $pedido->fecha }}
                                    </small>
                                </td>
                                <td class="fw-bold text-success">
                                    ${{ number_format($pedido->total, 2) }}
                                </td>
                                <td>
                                    <span class="badge 
                                        @switch($pedido->estado)
                                            @case('pendiente') bg-warning @break
                                            @case('en_proceso') bg-info @break
                                            @case('completado') bg-success @break
                                            @case('cancelado') bg-danger @break
                                        @endswitch
                                    ">
                                        {{ ucfirst(str_replace('_', ' ', $pedido->estado)) }}
                                    </span>
                                </td>
                                <td>{{ Str::limit($pedido->direccion_envio, 20) }}</td>
                                <td>{{ Str::limit($pedido->notas, 15) }}</td>
                                <td>
                                    <div class="d-grid">
                                        <form 
                                            action="{{ route('repartidor.pedidos.update', $pedido->id) }}" 
                                            method="POST"
                                            x-data
                                            x-on:submit.prevent="if(confirm('¿Confirmar cambio de estado?')) $el.submit()"
                                        >
                                            @csrf
                                            @method('PATCH')
                                            <select 
                                                name="estado" 
                                                class="form-select form-select-sm mb-2 @error('estado') is-invalid @enderror"
                                            >
                                                @php
                                                $estados = [
                                                    'pendiente' => 'Pendiente',
                                                    'en_proceso' => 'En Proceso',
                                                    'completado' => 'Completado',
                                                    'cancelado' => 'Cancelado'
                                                ];
                                                @endphp
                                                @foreach($estados as $valor => $etiqueta)
                                                    <option 
                                                        value="{{ $valor }}" 
                                                        {{ $pedido->estado === $valor ? 'selected' : '' }}
                                                    >
                                                        {{ $etiqueta }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button 
                                                type="submit" 
                                                class="btn btn-outline-primary btn-sm w-100"
                                            >
                                                <i class="bi bi-arrow-repeat me-1"></i>Actualizar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    No hay pedidos disponibles
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($pedidos->hasPages())
            <div class="card-footer">
                {{ $pedidos->links('vendor.pagination.bootstrap-5') }}
            </div>
            @endif
        </div>
    </div>
</x-app-layout>