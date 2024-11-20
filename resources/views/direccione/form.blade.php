<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4 shadow-sm">
                <div class="row g-3">
                    <div class="col-12">
                        
        <div class="form-group mb-2 mb20">
            <label for="id_user" class="form-label">{{ __('Id User') }}</label>
            <x-wireui-input type="text" name="id_user" value="{{ old('id_user', $direccione?->id_user) }}" id="id_user" placeholder="Id User"/>
            {!! $errors->first('id_user') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <x-wireui-input type="text" name="direccion" value="{{ old('direccion', $direccione?->direccion) }}" id="direccion" placeholder="Direccion"/>
            {!! $errors->first('direccion') !!}
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