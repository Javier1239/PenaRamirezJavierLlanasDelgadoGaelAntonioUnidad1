@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')

<main class="bg-white-100">
    <!-- Banner con imagen de fondo -->
    <section class="relative bg-gray-900 text-white py-16">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-0 bg-cover bg-center bg-opacity-75" style="background-image: url('banner1.jpg');"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-5xl font-bold">Bienvenido a SecureStay Hotel</h2>
            <p class="mt-4 text-xl">¡Tu destino perfecto para una estancia memorable!</p>
        </div>
    </section>
    
    <!-- Promociones del hotel -->
    <section class="py-12 bg-white-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-semibold mb-8 text-center text-gray-900">¡Ofertas Especiales!</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Oferta Especial de Primavera</h3>
                    <p>¡Reserva tu estancia esta primavera y obtén un 20% de descuento!</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Paquete de Vacaciones Familiares</h3>
                    <p>¡Disfruta de unas vacaciones familiares con nuestras exclusivas ofertas de paquetes!</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Escapada de Fin de Semana</h3>
                    <p>¡Escápate durante el fin de semana y ahorra mucho!</p>
                </div>
            </div>
        </div>
        <div class="mt-12 bg-gray-800 text-white py-8 text-center bg-cover bg-center" style="background-image: url('banner2.jpg');">
            <p class="text-lg">¡Aprovecha estas increíbles ofertas y reserva hoy mismo!</p>
            <a href="#" class="inline-block mt-4 bg-gray-900 hover:bg-gray-700 text-white py-3 px-6 rounded-lg text-lg font-semibold">Reservar Ahora</a>
        </div>
        
    </section>
    
    

    
    <!-- Marcas con las que trabajamos -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold mb-6 text-gray-900">Our Partners</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="flex items-center justify-center">
                    <img src="images.png" alt="Partner 1" class="h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="clip.png" alt="Partner 2" class="h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="pepsi.png" alt="Partner 3" class="h-12">
                </div>
                <div class="flex items-center justify-center">
                    <img src="mk.png" alt="Partner 4" class="h-12">
                </div>
            </div>
        </div>
    </section>

    <!-- Cartas de tipos de habitaciones -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold mb-6 text-gray-900">Tipos de habitaciones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tipo de habitación 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                   <img src="estandar 2.jpg" alt="Room 1" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Habitación Estándar</h3>
                        <p class="text-gray-700 mb-4">Ideal para una estancia cómoda para individuos o parejas.</p>
                        <p class="text-gray-700 mb-2">Precio: $100/noche</p>
                        <p class="text-gray-700 mb-2">Capacidad: 2 personas</p>
                        <p class="text-gray-700 mb-2">Tipo: Estándar</p>
                        <a href="{{ url('rooms') }}" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
                <!-- Tipo de habitación 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="lujo.jpg" alt="Room 2" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Habitación de Lujo</h3>
                        <p class="text-gray-700 mb-4">Habitación lujosa con espacio adicional y comodidades.</p>
                        <p class="text-gray-700 mb-2">Precio: $150/noche</p>
                        <p class="text-gray-700 mb-2">Capacidad: 2 personas</p>
                        <p class="text-gray-700 mb-2">Tipo: De lujo</p>
                        <a href="{{ url('rooms') }}" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
                <!-- Tipo de habitación 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="suite.jpg" alt="Room 3" class="w-full h-48 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Suite Familiar</h3>
                        <p class="text-gray-700 mb-4">Perfecta para familias que desean comodidad y espacio extra.</p>
                        <p class="text-gray-700 mb-2">Precio: $200/noche</p>
                        <p class="text-gray-700 mb-2">Capacidad: 4 personas</p>
                        <p class="text-gray-700 mb-2">Tipo: Suite</p>
                        <a href="{{ url('rooms') }}" class="block bg-gray-800 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection