<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{__('Deli-Fast')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        {{-- wireui --}}
        <wireui:scripts />
        <script src="//unpkg.com/alpinejs" defer></script>
        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="bg-white py-3 pt-0">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10 pt-0 shadow-md sm:rounded-lg">
                        <div class="">
                            <!-- Contenido aquí -->
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                
            </main>

            {{-- Footer --}}
            <footer class="footer bg-dark text-white">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>DelyFast</h5>
                            <p>Somos una plataforma dedicada a ofrecerte el mejor servicio de pedidos de comida en l&#237;nea.</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Enlaces R&#225;pidos</h5>
                            <ul class="list-unstyled">
                                <li><a href="{{route('dashboard')}}" class="text-white">Inicio</a></li>
                                <li><a href="{{route('menu.index')}}" class="text-white">Men&#250;</a></li>
                                <li><a href="{{route('carrito.index')}}" class="text-white">Carrito</a></li>
                                <li><a href="{{route('contacto.index')}}" class="text-white">Contacto</a></li>
                                @can('navigation.admin')
                                <li><a href="{{route('users.index')}}" class="text-white">Administraci&#243;n</a></li>
                                @endcan
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h5>S&#237;guenos</h5>
                            <div class="d-flex">
                                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <p>&copy; 2024 MiSitio. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
