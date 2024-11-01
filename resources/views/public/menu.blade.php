<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <!-- Contenedor principal -->
    <div class="container py-8">
        <!-- Título y frase -->
        <div class="text-center mb-4">
            <h1>Explora Nuestros Platillos</h1>
            <p class="lead">Una selección especial para satisfacer tus antojos.</p>
        </div>

        <!-- Tarjetas de platillos -->
        <div class="row">
            <x-menu-card></x-menu-card>
            <x-menu-card></x-menu-card>
            <x-menu-card></x-menu-card>
        </div>
    </div>

    <!-- Botón para ver más -->
    <div class="text-center mt-4">
        <a href="#">
            <x-wireui-button info label="Ver más platos" right-icon='plus' />
        </a>
    </div>
    </div>

</x-app-layout>