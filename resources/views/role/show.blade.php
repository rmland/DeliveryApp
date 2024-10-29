<x-app-layout>
    <x-slot name="header">
        <h2 class="text-primary fw-bold fs-2 mb-0">
            {{$role->name ?? __('Show') . " " . __('Role')}}
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
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
                            <button type="submit" 
                                    class="btn btn-danger"
                                    onclick="return confirm('¿Está seguro que desea eliminar este registro?')">
                                <i class="fa fa-trash me-2"></i>{{__('Delete')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>