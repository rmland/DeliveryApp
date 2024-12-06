<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$pedido->name ?? __('Detalles de ') . " " . __('Pedido')}}
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">                 
                            <h5 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{__('Show')}} Pedido
                            </h5>
                            <div class="btn-group gap-1">
                                <x-wireui-mini-button squared primary icon="pencil"  href="{{route('pedidos.edit', $pedido->id)}}"/>
                                <x-wireui-button icon="home" label="Regresar" href="{{route('pedidos.index')}}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente:</strong>
                                    {{ $pedido->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $pedido->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total:</strong>
                                    {{ $pedido->total }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $pedido->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion Envio:</strong>
                                    {{ $pedido->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notas:</strong>
                                    {{ $pedido->notas }}
                                </div>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-white py-3">
                        <form action="{{route('pedidos.destroy', $pedido->id)}}" 
                              method="POST" 
                              class="text-end">
                            @csrf
                            @method('DELETE')
                            <x-wireui-button label="Eliminar" right-icon="trash" interaction="negative" type="submit"
                                                    rounded interaction="negative"
                                                    onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>