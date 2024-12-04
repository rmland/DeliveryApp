<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$role->name ?? __('Detalles de ') . " " . __('Rol')}}
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">                 
                            <h5 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{__('Show')}} Role
                            </h5>
                            <div class="btn-group gap-1">
                                <x-wireui-mini-button squared primary icon="pencil"  href="{{route('roles.edit', $role->id)}}"/>
                                <x-wireui-button icon="home" label="Regresar" href="{{route('roles.index')}}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $role->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Guard Name:</strong>
                                    {{ $role->guard_name }}
                                </div>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-white py-3">
                        <form action="{{route('roles.destroy', $role->id)}}" 
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