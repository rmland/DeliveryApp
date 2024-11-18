<x-app-layout>
    <x-slot name="header">
        <a href="{{route('pedidos.index')}}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Pedidos
            </h2>
        </a>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{__('Pedidos')}}
                            </h5>
                            <a href="{{route('pedidos.create')}}" >
                                <x-wireui-button green label="Agregar" right-icon="plus" interaction="positive"/>
                            </a>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="mx-3 mt-3">
                            <x-wireui-alert title="¡Acción Exitosa!" positive>
                                {{$message}}
                            </x-alert>
                        </div>
                    @endif

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="fw-bold text-dark ps-4">No</th>
                                        
									<th >Cliente Id</th>
									<th >Fecha</th>
									<th >Total</th>
									<th >Estado</th>
									<th >Direccion Envio</th>
									<th >Notas</th>

                                        <th class="fw-bold text-dark text-end pe-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td class="ps-4">{{++$i}}</td>
                                            
										<td >{{ $pedido->cliente_id }}</td>
										<td >{{ $pedido->fecha }}</td>
										<td >{{ $pedido->total }}</td>
										<td >{{ $pedido->estado }}</td>
										<td >{{ $pedido->direccion_envio }}</td>
										<td >{{ $pedido->notas }}</td>

                                            <td class="text-end pe-4">
                                                <div class="btn-group gap-1">
                                                <a href="{{route('pedidos.show', $pedido->id)}}">
                                                    <x-wireui-button rounded warning label="Detalles" right-icon="information-circle"/>
                                                </a>
                                                    <a href="{{route('pedidos.edit', $pedido->id)}}"/>
                                                        <x-wireui-button rounded teal right-icon="pencil" primary label="Editar" />
                                                    </a>
                                                    <form action="{{route('pedidos.destroy', $pedido->id)}}" 
                                                          method="POST" 
                                                          class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-wireui-button label="Eliminar" right-icon="trash" interaction="negative" type="submit" rounded interaction="negative" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;" />
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-white py-3">
                        {!!$pedidos->withQueryString()->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>