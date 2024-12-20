<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$user->name ?? __('Detalles de ') . " " . __('Usuarios')}}
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
                                {{__('Show')}} User
                            </h5>
                            <div class="btn-group gap-1">
                                <x-wireui-mini-button squared primary icon="pencil"  href="{{route('users.edit', $user->id)}}"/>
                                <x-wireui-button icon="home" label="Regresar" href="{{route('users.index')}}"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $user->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $user->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Two Factor Secret:</strong>
                                    {{ $user->two_factor_secret }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Two Factor Recovery Codes:</strong>
                                    {{ $user->two_factor_recovery_codes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Two Factor Confirmed At:</strong>
                                    {{ $user->two_factor_confirmed_at }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Current Team Id:</strong>
                                    {{ $user->current_team_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Profile Photo Path:</strong>
                                    {{ $user->profile_photo_path }}
                                </div>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer bg-white py-3">
                        <form action="{{route('users.destroy', $user->id)}}" 
                              method="POST" 
                              class="text-end">
                            @csrf
                            @method('DELETE')
                            <x-wireui-button label="Delete" right-icon="trash" interaction="negative" type="submit"
                                                    rounded interaction="negative"
                                                    onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>