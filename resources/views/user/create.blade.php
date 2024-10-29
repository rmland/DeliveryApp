<x-app-layout>
    <x-slot name="header">
        <h2 class="text-primary fw-bold fs-2 mb-0">
            {{__('Create')}} User
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
                                {{__('Create')}} User
                            </h5>
                            <x-wireui-button icon="home" label="Regresar" href="{{route('users.index')}}"/>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" 
                              action="{{route('users.store')}}" 
                              role="form" 
                              enctype="multipart/form-data"
                              class="needs-validation" 
                              novalidate>
                            @csrf
                            
                            @include('user.form')

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save me-2"></i>{{__('Save')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




