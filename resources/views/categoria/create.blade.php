<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Create')}} Categoria
        </h2>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">
                                {{__('Create')}} Categoria
                            </h5>
                            <x-wireui-button icon="home" label="Regresar" href="{{route('categorias.index')}}"/>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" 
                              action="{{route('categorias.store')}}" 
                              role="form" 
                              enctype="multipart/form-data"
                              class="needs-validation" 
                              novalidate>
                            @csrf
                            
                            @include('categoria.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



