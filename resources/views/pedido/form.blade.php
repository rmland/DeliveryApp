<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4 shadow-sm">
                <div class="row g-3">
                    <div class="col-12">

                        <div class="form-group mb-2 mb20">
                            <label for="cliente_id" class="form-label">{{ __('Cliente Id') }}</label>
                            <x-wireui-input type="text" name="cliente_id"
                                value="{{ old('cliente_id', $pedido?->cliente_id) }}" id="cliente_id"
                                placeholder="Cliente Id" />
                            {!! $errors->first('cliente_id') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
                            <x-wireui-input type="text" name="fecha" value="{{ old('fecha', $pedido?->fecha) }}"
                                id="fecha" placeholder="Fecha" />
                            {!! $errors->first('fecha') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="total" class="form-label">{{ __('Total') }}</label>
                            <x-wireui-input type="text" name="total" value="{{ old('total', $pedido?->total) }}"
                                id="total" placeholder="Total" />
                            {!! $errors->first('total') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="estado" class="form-label">{{ __('Estado') }}</label>
                            <x-wireui-input type="text" name="estado" value="{{ old('estado', $pedido?->estado) }}"
                                id="estado" placeholder="Estado" />
                            {!! $errors->first('estado') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="direccion_envio" class="form-label">{{ __('Direccion Envio') }}</label>
                            <x-wireui-input type="text" name="direccion_envio"
                                value="{{ old('direccion_envio', $pedido?->direccion_envio) }}" id="direccion_envio"
                                placeholder="Direccion Envio" />
                            {!! $errors->first('direccion_envio') !!}
                        </div>
                        <x-wireui-errors title="Encontramos {errors} error(es) de validacion" />
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <x-wireui-button label="Aceptar" right-icon="check" flat interaction:solid="positive"
                            type="submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>