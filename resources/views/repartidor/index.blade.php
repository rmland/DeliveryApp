<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">Pedidos pendientes</h2>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        @if ($message = Session::get('success'))
            <x-modal-alert></x-modal-alert>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4 flex justify-between items-center">
                <h4 class="text-lg font-semibold text-white mb-0">Gestión de Pedidos</h4>
                <span class="bg-white/20 text-white rounded-full px-3 py-1 text-sm">
                    Total: {{ $pedidos->count() }} Pedidos
                </span>
            </div>
            
            <div class="card-body p-0">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead class="bg-gray-100 border-b">
                            <tr class="text-xs text-gray-600 uppercase tracking-wider text-center">
                                <th class="p-3">ID</th>
                                <th class="p-3">Cliente</th>
                                <th class="p-3">Fecha</th>
                                <th class="p-3">Total</th>
                                <th class="p-3">Estado</th>
                                <th class="p-3">Dirección</th>
                                <th class="p-3">Notas</th>
                                <th class="p-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pedidos as $pedido)
                            <tr class="border-b hover:bg-gray-50 transition-colors text-center">
                                <td class="p-3 text-blue-600 font-bold">#{{ $pedido->id }}</td>
                                <td class="p-3">{{ $pedido->cliente->name ?? 'N/A' }}</td>
                                <td class="p-3 text-gray-500">
                                    <small>{{ $pedido->fecha }}</small>
                                </td>
                                <td class="p-3 text-green-600 font-bold">
                                    ${{ number_format($pedido->total, 2) }}
                                </td>
                                <td class="p-3">
                                    <span class="
                                        px-2 py-1 rounded-full text-xs
                                        @switch($pedido->estado)
                                            @case('pendiente') bg-yellow-100 text-yellow-800 @break
                                            @case('en_proceso') bg-blue-100 text-blue-800 @break
                                            @case('completado') bg-green-100 text-green-800 @break
                                            @case('cancelado') bg-red-100 text-red-800 @break
                                        @endswitch
                                    ">
                                        {{ ucfirst(str_replace('_', ' ', $pedido->estado)) }}
                                    </span>
                                </td>
                                <td class="p-3 text-gray-600">{{ Str::limit($pedido->direccion_envio, 20) }}</td>
                                <td class="p-3 text-gray-500">{{ Str::limit($pedido->notas, 15) }}</td>
                                <td class="p-3">
                                    <div class="flex flex-col space-y-2">
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
                                                class="w-full px-2 py-1 border rounded text-sm mb-2 @error('estado') is-invalid @enderror"
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
                                                class="w-full bg-blue-500 text-white rounded py-1 text-sm hover:bg-blue-600 transition-colors"
                                            >
                                                Actualizar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center text-gray-500 py-4">
                                    No hay pedidos disponibles
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($pedidos->hasPages())
            <div class="bg-gray-100 p-4 flex justify-center">
                {{ $pedidos->links('vendor.pagination.bootstrap-5') }}
            </div>
            @endif
        </div>
    </div>
</x-app-layout>