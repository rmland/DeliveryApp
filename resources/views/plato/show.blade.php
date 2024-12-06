<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$plato->name ?? __('Detalles de ') . " " . __('Plato')}}
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">                 
                            <h5 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{__('Show')}} Plato
                            </h5>
                            <div class="btn-group gap-1">
                                <x-wireui-mini-button squared primary icon="pencil"  href="{{route('platos.edit', $plato->id)}}"/>
                                <x-wireui-button icon="home" label="Regresar" href="{{route('platos.index')}}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $plato->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $plato->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $plato->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categoria:</strong>
                                    {{ $plato->categoria->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Disponible:</strong>
                                    {{ $plato->disponible == 1 ? 'Disponible' : 'No Disponible' }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img Path:</strong>
                                    {{ $plato->img_path }}
                                </div>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-white py-3">
                        <form action="{{route('platos.destroy', $plato->id)}}" 
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