<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4 shadow-sm">
                <div class="row g-3">
                    <div class="col-12">
                        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <x-wireui-input type="text" name="nombre" value="{{ old('nombre', $categoria?->nombre) }}" id="nombre" placeholder="Nombre"/>
            {!! $errors->first('nombre') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <x-wireui-input type="text" name="descripcion" value="{{ old('descripcion', $categoria?->descripcion) }}" id="descripcion" placeholder="Descripcion"/>
            {!! $errors->first('descripcion') !!}
        </div>

                        <x-wireui-errors title="Encontramos {errors} error(es) de validacion" />
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                    <x-wireui-button label="Aceptar" right-icon="check" flat interaction:solid="positive" type="submit"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>