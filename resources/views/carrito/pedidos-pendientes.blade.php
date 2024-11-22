<x-app-layout>
    <x-slot name="header">
        <h2>Pedidos pendientes</h2>
    </x-slot>
    <div class="container">
        <h1 class="text-center mb-4">Pedidos Pendientes</h1>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($pedidosPendientes->isEmpty())
        <p class="text-center">No hay pedidos pendientes en este momento.</p>
        @else
        <div class="container-fluid px-4">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Pedidos Pendientes</h3>
                    <x-wireui-button label="Regresar" href="{{ route('carrito.index') }}"
                        class="btn-outline-secondary" />
                </div>

                <div class="card-body">
                    @if($pedidosPendientes->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Cliente</th>
                                    <th>Platos</th>
                                    <th>Notas</th>
                                    <th>Total</th>
                                    <th>Fecha</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pedidosPendientes as $pedido)
                                <tr>
                                    <td class="text-center">{{ $pedido->id }}</td>
                                    <td>{{ auth()->user()->name }}</td>
                                    <td>
                                        <ol>
                                            @foreach ($pedido->platos as $platos)
                                            <li>{{$platos->nombre}}</li>
                                            @endforeach
                                        </ol>
                                    </td>
                                    <td>{{$pedido->notas}}</td>
                                    <td class="text-success">
                                        ${{ number_format($pedido->total, 2) }}
                                    </td>
                                    <td>{{ $pedido->created_at->format('d/m/Y H:i') }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('carrito.update', $pedido->id) }}" method="POST"
                                            class="d-inline" x-data
                                            x-on:submit.prevent="if(confirm('¿Estás seguro de cancelar este pedido?')) $el.submit()">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-x-circle me-1"></i>Cancelar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        No tienes pedidos pendientes actualmente.
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
    </div>
</x-app-layout>