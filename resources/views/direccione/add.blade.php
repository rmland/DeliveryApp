<x-app-layout>
    <x-slot name="header">
        Agrega una nueva direccion
    </x-slot>
    <div>
        <form action="{{ route('direcciones.store') }}" method="POST" class="p-4 border rounded shadow-sm bg-light">
            @csrf
        
            <div class="mb-3">
                <label for="direccion" class="form-label fw-bold">Nueva Dirección</label>
                <input 
                    type="text" 
                    id="direccion" 
                    name="direccion" 
                    class="form-control" 
                    placeholder="Ingresa tu dirección" 
                    required>
            </div>
        
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Guardar Dirección</button>
            </div>
        </form> 
    </div>
</x-app-layout>