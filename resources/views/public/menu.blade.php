<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <!-- Contenedor principal -->
    <div class="container py-8">
        @if ($message = Session::get('success'))
        <x-modal-alert></x-modal-alert>
        @endif
        <!-- Título y frase -->
        <div class="text-center mb-4">
            <h1>Explora Nuestros Platillos</h1>
            <p class="lead">Una selección especial para satisfacer tus antojos.</p>
        </div>
        <div class="w-100 d-flex justify-content-end mb-3">
            <form action="#" class="d-flex gap-2 align-items-center">
                <label for="categorias">Busca por categorias</label>
                <select id="categorias" name="categoria" class="form-select" name="" id="">
                    @foreach ($categorias as $categoria)
                    <option name="categoria" value="{{ $categoria->nombre }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                <x-wireui-button primary type="submit">Ver</x-wireui-button>
            </form>
        </div>
        <!-- Tarjetas de platillos -->
        <div class="row">
            @foreach ($platos as $plato)
            @include('components.menu-card')
            @endforeach
        </div>
    </div>
    </div>

</x-app-layout>