<x-app-layout>
    <x-slot name="header">
        <h2 class="text-primary fw-bold fs-2 mb-0">
            {{__('Update')}} User
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
                                {{__('Update')}} User
                            </h5>
                            <x-wireui-button icon="home" label="Regresar" href="{{route('users.index')}}"/>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" 
                              action="{{route('users.update', $user->id)}}" 
                              role="form" 
                              enctype="multipart/form-data"
                              class="needs-validation" 
                              novalidate>
                            @csrf
                            {{method_field('PATCH')}}
                            
                            @include('user.form')

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save me-2"></i>{{__('Update')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>