<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4 shadow-sm">
                <div class="row g-3">
                    <div class="col-12">
                        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <x-wireui-input type="text" name="name" value="{{ old('name', $user?->name) }}" id="name" placeholder="Name"/>
            {!! $errors->first('name') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <x-wireui-input type="text" name="email" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email"/>
            {!! $errors->first('email') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="two_factor_secret" class="form-label">{{ __('Two Factor Secret') }}</label>
            <x-wireui-input type="text" name="two_factor_secret" value="{{ old('two_factor_secret', $user?->two_factor_secret) }}" id="two_factor_secret" placeholder="Two Factor Secret"/>
            {!! $errors->first('two_factor_secret') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="two_factor_recovery_codes" class="form-label">{{ __('Two Factor Recovery Codes') }}</label>
            <x-wireui-input type="text" name="two_factor_recovery_codes" value="{{ old('two_factor_recovery_codes', $user?->two_factor_recovery_codes) }}" id="two_factor_recovery_codes" placeholder="Two Factor Recovery Codes"/>
            {!! $errors->first('two_factor_recovery_codes') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="two_factor_confirmed_at" class="form-label">{{ __('Two Factor Confirmed At') }}</label>
            <x-wireui-input type="text" name="two_factor_confirmed_at" value="{{ old('two_factor_confirmed_at', $user?->two_factor_confirmed_at) }}" id="two_factor_confirmed_at" placeholder="Two Factor Confirmed At"/>
            {!! $errors->first('two_factor_confirmed_at') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="current_team_id" class="form-label">{{ __('Current Team Id') }}</label>
            <x-wireui-input type="text" name="current_team_id" value="{{ old('current_team_id', $user?->current_team_id) }}" id="current_team_id" placeholder="Current Team Id"/>
            {!! $errors->first('current_team_id') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="profile_photo_path" class="form-label">{{ __('Profile Photo Path') }}</label>
            <x-wireui-input type="text" name="profile_photo_path" value="{{ old('profile_photo_path', $user?->profile_photo_path) }}" id="profile_photo_path" placeholder="Profile Photo Path"/>
            {!! $errors->first('profile_photo_path') !!}
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