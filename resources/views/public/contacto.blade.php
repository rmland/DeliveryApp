<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="container py-8">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <x-wireui-button positive label="Positive" type="submit" label="Enviar Mensaje"/>
            </div>
        </form>
    </div>

</x-app-layout>