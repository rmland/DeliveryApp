<x-app-layout>
    <x-slot name="header">
        <a href="roles.index">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Roles
            </h2>
        </a>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
                                {{__('Roles')}}
                            </h5>
                            <a href="{{route('roles.create')}}" >
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
                                        
									<th >Name</th>
									<th >Guard Name</th>

                                        <th class="fw-bold text-dark text-end pe-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td class="ps-4">{{++$i}}</td>
                                            
										<td >{{ $role->name }}</td>
										<td >{{ $role->guard_name }}</td>

                                            <td class="text-end pe-4">
                                                <div class="btn-group gap-1">
                                                <a href="{{route('roles.show', $role->id)}}">
                                                    <x-wireui-button rounded warning label="Detalles" right-icon="information-circle"/>
                                                </a>
                                                    <a href="{{route('roles.edit', $role->id)}}"/>
                                                        <x-wireui-button rounded teal right-icon="pencil" primary label="Editar" />
                                                    </a>
                                                    <form action="{{route('roles.destroy', $role->id)}}" 
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
                        {!!$roles->withQueryString()->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>