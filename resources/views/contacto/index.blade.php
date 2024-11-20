<x-app-layout>
    <x-slot name="header">

    </x-slot>
    @if ($message = Session::get('success'))
    <div class="mb-4">
        <x-modal-alert></x-modal-alert>
    </div>
    @endif
    <div class="container py-8">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <form action="{{ route('contacto.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <x-wireui-button positive type="submit" label="Enviar Mensaje" />
            </div>
        </form>
    </div>

</x-app-layout>