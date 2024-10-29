<x-app-layout>
    <x-slot name="header">
        <h2 class="text-primary fw-bold fs-2 mb-0">
            Users
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
                                {{__('Users')}}
                            </h5>
                            <x-wireui-button label="Agregar" right-icon="plus" interaction="positive" href="{{route('users.create')}}"/>
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
									<th >Email</th>
									<th >Two Factor Secret</th>
									<th >Two Factor Recovery Codes</th>
									<th >Two Factor Confirmed At</th>
									<th >Current Team Id</th>
									<th >Profile Photo Path</th>

                                        <th class="fw-bold text-dark text-end pe-4">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="ps-4">{{++$i}}</td>
                                            
										<td >{{ $user->name }}</td>
										<td >{{ $user->email }}</td>
										<td >{{ $user->two_factor_secret }}</td>
										<td >{{ $user->two_factor_recovery_codes }}</td>
										<td >{{ $user->two_factor_confirmed_at }}</td>
										<td >{{ $user->current_team_id }}</td>
										<td >{{ $user->profile_photo_path }}</td>

                                            <td class="text-end pe-4">
                                                <div class="btn-group gap-1">
                                                    <x-wireui-mini-button rounded info icon="information-circle" href="{{route('users.show', $user->id)}}" />
                                                    <x-wireui-mini-button squared primary icon="pencil"  href="{{route('users.edit', $user->id)}}"/>
                                                    <form action="{{route('users.destroy', $user->id)}}" 
                                                          method="POST" 
                                                          class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-wireui-mini-button rounded negative icon="x-mark" type="submit" rounded interaction="negative" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"/>
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
                        {!!$users->withQueryString()->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>