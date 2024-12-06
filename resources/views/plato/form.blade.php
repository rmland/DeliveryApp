<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4 shadow-sm">
                <div class="row g-3">
                    <div class="col-12">

                        <div class="form-group mb-2 mb20">
                            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
                            <x-wireui-input type="text" name="nombre" value="{{ old('nombre', $plato?->nombre) }}"
                                id="nombre" placeholder="Nombre" />
                            {!! $errors->first('nombre') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
                            <x-wireui-input type="text" name="descripcion"
                                value="{{ old('descripcion', $plato?->descripcion) }}" id="descripcion"
                                placeholder="Descripcion" />
                            {!! $errors->first('descripcion') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="precio" class="form-label">{{ __('Precio') }}</label>
                            <x-wireui-input type="text" name="precio" value="{{ old('precio', $plato?->precio) }}"
                                id="precio" placeholder="Precio" />
                            {!! $errors->first('precio') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="id_categoria" class="form-label">{{ __('Categoria') }}</label>
                            <x-wireui-native-select  name="id_categoria" id="id_categoria" 
                                placeholder="Selecciona la disponibilidad del plato">
                            @if ($categorias)
                            @foreach ($categorias as $categoria )
                                <option value="{{ $categoria->id }}" {{ $plato?->id_categoria == $categoria->id ? 'selected' : '' }}>{{ $categoria?->nombre }}</option>
                            @endforeach
                            @endif
                            </x-wireui-native-select>
                            {!! $errors->first('id_categoria') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="disponible" class="form-label">{{ __('Disponibilidad') }}</label>
                            <x-wireui-native-select name="disponible" id="disponible"
                                placeholder="Selecciona la disponibilidad del plato">
                                <option value="1" {{ $plato?->disponible == 1 ? 'selected' : '' }}>Disponible</option>
                                <option value="0" {{ $plato?->disponible == 0 ? 'selected' : '' }}>No disponible
                                </option>
                            </x-wireui-native-select>
                            {!! $errors->first('disponible') !!}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <label for="img_path" class="form-label">{{ __('Imagen') }}</label>
                            <input type="file" name="img_path" value="{{ old('img_path', $plato?->img_path) }}"
                                id="img_path" placeholder="Img Path" />
                            {!! $errors->first('img_path') !!}
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