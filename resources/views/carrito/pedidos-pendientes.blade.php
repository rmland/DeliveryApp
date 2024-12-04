<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">Pedidos pendientes</h2>
    </x-slot>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-center text-3xl font-bold mb-6 text-gray-800">Pedidos Pendientes</h1>

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if($pedidosPendientes->isEmpty())
        <p class="text-center text-gray-600 text-lg">No hay pedidos pendientes en este momento.</p>
        @else
        <div class="container mx-auto">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-white">Pedidos Pendientes</h3>
                    <a href="{{ route('carrito.index') }}" class="bg-white/20 text-white rounded-full px-3 py-1 text-sm hover:bg-white/30 transition-colors">
                        Regresar
                    </a>
                </div>

                <div class="p-4">
                    @if($pedidosPendientes->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead class="bg-gray-100 border-b">
                                <tr class="text-xs text-gray-600 uppercase tracking-wider text-center">
                                    <th class="p-3">#</th>
                                    <th class="p-3 text-left">Cliente</th>
                                    <th class="p-3 text-left">Platos</th>
                                    <th class="p-3 text-left">Notas</th>
                                    <th class="p-3">Total</th>
                                    <th class="p-3">Fecha</th>
                                    <th class="p-3">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pedidosPendientes as $pedido)
                                <tr class="border-b hover:bg-gray-50 transition-colors">
                                    <td class="p-3 text-center text-blue-600 font-bold">{{ $pedido->id }}</td>
                                    <td class="p-3">{{ auth()->user()->name }}</td>
                                    <td class="p-3">
                                        <ol class="list-decimal list-inside">
                                            @foreach ($pedido->platos as $platos)
                                            <li>{{$platos->nombre}}</li>
                                            @endforeach
                                        </ol>
                                    </td>
                                    <td class="p-3">{{$pedido->notas}}</td>
                                    <td class="p-3 text-center text-green-600 font-bold">
                                        ${{ number_format($pedido->total, 2) }}
                                    </td>
                                    <td class="p-3 text-center text-gray-600">
                                        {{ $pedido->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="p-3 text-center">
                                        <form 
                                            action="{{ route('carrito.update', $pedido->id) }}" 
                                            method="POST"
                                            x-data
                                            x-on:submit.prevent="if(confirm('¿Estás seguro de cancelar este pedido?')) $el.submit()"
                                        >
                                            @csrf
                                            @method('PATCH')
                                            <button 
                                                type="submit" 
                                                class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600 transition-colors flex items-center justify-center"
                                            >
                                                Cancelar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative text-center">
                        No tienes pedidos pendientes actualmente.
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
    </div>
</x-app-layout>