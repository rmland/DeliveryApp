<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
                {{-- <x-welcome /> --}}
                <section class="hero text-white text-center d-flex align-items-center justify-content-center">
                    <div class="container">
                        <h1 class="display-4 text-dark mt-4">¡Deliciosa comida, directamente a tu puerta!</h1>
                        <p class="lead text-dark">Explora nuestro men&#250; y haz tu pedido en minutos. ¡Comida fresca y r&#225;pida, sin complicaciones!</p>
                        <x-wireui-button primary xl label="Ordena Ahora" href="{{route('public.menu')}}" />
                    </div>
                </section>
                
                <section class="services py-5 text-center">
                    <div class="container">
                        <h2 class="mb-4">¿Por qu&#233; elegirnos?</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <i class="fas fa-shipping-fast fa-3x mb-3"></i>
                                <h4>Entrega R&#225;pida</h4>
                                <p>Comida caliente y fresca entregada r&#225;pidamente a tu puerta.</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-utensils fa-3x mb-3"></i>
                                <h4>Men&#250; Variado</h4>
                                <p>Desde comida gourmet hasta opciones saludables, tenemos algo para todos.</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-star fa-3x mb-3"></i>
                                <h4>Calidad Garantizada</h4>
                                <p>Ingredientes frescos, cocinados con los m&#225;s altos est&#225;ndares de calidad.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="testimonials bg-light py-5 text-center">
                    <div class="container">
                        <h2 class="mb-4">Lo que dicen nuestros clientes</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial">
                                    <p>"La mejor experiencia de pedido en l&#237;nea. Comida deliciosa y a tiempo."</p>
                                    <h5>- Juan P.</h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial">
                                    <p>"&#161;Me encanta la variedad de opciones saludables que ofrecen!"</p>
                                    <h5>- Mar&#237;a G.</h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial">
                                    <p>"Servicio incre&#237;ble, siempre entregan con una sonrisa."</p>
                                    <h5>- Carlos R.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</x-app-layout>
