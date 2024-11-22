<x-app-layout>
    <x-slot name="header">
        <a href="{{route('users.index')}}">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Usuarios') }}
            </h2>
        </a>
    </x-slot>
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <form action="#" method="get">
                    <input name="search" type="text" placeholder="Busca un usuario">
                    <x-wireui-button type="submit" label="Buscar" />
                </form>
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
                                {{__('Lista de usuarios')}}
                            </h5>
                            <a href="{{route('users.create')}}">
                                <x-wireui-button green label="Agregar" right-icon="plus" interaction="positive" />
                            </a>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))

                    <x-modal-alert></x-modal-alert>
                    @endif

                    <div class="card-body p-0">
                        @if ($users->count())
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="fw-bold text-dark ps-4">ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="fw-bold text-dark text-end pe-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="ps-4">{{$user->id}}</td>

                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="text-end pe-4">
                                            <div class="btn-group gap-1">
                                                <a href="{{route('users.show', $user->id)}}">
                                                    <x-wireui-button rounded warning label="Detalles"
                                                        right-icon="information-circle" />
                                                </a>
                                                <a href="{{route('users.edit', $user->id)}}" />
                                                <x-wireui-button rounded teal right-icon="pencil" label="Editar" />
                                                </a>
                                                <form action="{{route('users.destroy', $user->id)}}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-wireui-button label="Delete" right-icon="trash"
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
                        @else
                        <x-wireui-alert title="No hay usuarios registrados!" warning />
                        @endif

                    </div>
                    <div class="card-footer bg-white py-3">
                        {!!$users->withQueryString()->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>