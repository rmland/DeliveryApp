<x-app-layout>
    <x-slot name="header">
        <a href="{{route('platos.index')}}">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Platos
            </h2>
        </a>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0 shadow">
                    <div class="card-footer bg-white py-3">
                        {!!$platos->withQueryString()->links()!!}
                    </div>
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{__('Platos')}}
                            </h5>
                            <a href="{{route('platos.create')}}">
                                <x-wireui-button green label="Agregar" right-icon="plus" interaction="positive" />
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

                    <div class="card-body p-0 w-100">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="fw-bold text-dark ps-4">No</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Id Categoria</th>
                                        <th>Disponible</th>
                                        <th>Imagen</th>

                                        <th class="fw-bold text-dark text-end pe-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($platos as $plato)
                                    <tr>
                                        <td class="ps-4">{{++$i}}</td>

                                        <td>{{ $plato->nombre }}</td>
                                        <td>{{ $plato->descripcion }}</td>
                                        <td>{{ $plato->precio }}</td>
                                        <td>{{ $plato->categoria->nombre ?? 'Sin categoría' }}</td>
                                        <td>
                                            @if ($plato->disponible == 1)
                                            <span class="text-success">Disponible</span>
                                            @else
                                            <span class="text-danger">No disponible</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div><img class="img-thumbnail" style="width: 200px;"
                                                    src="{{asset($plato->img_path)}}" alt="{{$plato->nombre}}"></div>
                                        </td>

                                        <td class="text-end pe-4">
                                            <div class="btn-group gap-1">
                                                <a href="{{route('platos.show', $plato->id)}}">
                                                    <x-wireui-button rounded warning label="Detalles"
                                                        right-icon="information-circle" />
                                                </a>
                                                <a href="{{route('platos.edit', $plato->id)}}" />
                                                <x-wireui-button rounded teal right-icon="pencil" primary
                                                    label="Editar" />
                                                </a>
                                                <form action="{{route('platos.destroy', $plato->id)}}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-wireui-button label="Eliminar" right-icon="trash"
                                                        interaction="negative" type="submit" rounded
                                                        interaction="negative"
                                                        onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;" />
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
                        {!!$platos->withQueryString()->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>