@extends('layouts.user')
 
@section('title', 'Rooms')
 
@section('contents')


<!-- Contenido principal -->
<main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <section class="text-center mb-8 bg-gray-200 py-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Explora nuestras habitaciones</h2>
        <p class="mt-2 text-lg text-gray-600">Descubre la variedad de habitaciones que ofrecemos para tu estancia.</p>
        <div class="mt-8">
        </div>
    </section>

    <!-- Habitaciones -->
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        <!-- Habitación 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
            <img src="estandar 2.jpg" alt="Room 1" class="w-full object-cover" style="width: 450px; height: 250px;">
            <div class="p-6 flex-grow">
                <h3 class="text-xl font-semibold mb-2">Habitación Estándar</h3>
                <p class="text-gray-700 mb-4">Ideal para una estancia cómoda para individuos o parejas.</p>
                <ul class="text-gray-700 mb-4">
                    <li>Precio: $100/noche</li>
                    <li>Capacidad: 2 personas</li>
                    <li>Tipo: Estándar</li>
                </ul>
                @auth
    <a href="{{ url('habitacion_estandar') }}" class="block mx-auto mt-4 w-40 bg-blue-600 text-white text-center py-3 rounded-lg text-xl font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">Reservar</a>
@else
    <a href="{{ route('login') }}" class="block mx-auto mt-4 w-40 bg-gray-800 text-white text-center py-3 rounded-lg text-xl font-semibold hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 transition duration-300">Inicia sesión para reservar</a>
@endauth
            </div>
        </div>
    
        <!-- Habitación 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
            <img src="lujo.jpg" alt="Room 2" class="w-full object-cover" style="width: 450px; height: 250px;">
            <div class="p-6 flex-grow">
                <h3 class="text-xl font-semibold mb-2">Habitación de Lujo</h3>
                <p class="text-gray-700 mb-4">Habitación lujosa con espacio adicional y comodidades.</p>
                <ul class="text-gray-700 mb-4">
                    <li>Precio: $150/noche</li>
                    <li>Capacidad: 2 personas</li>
                    <li>Tipo: De lujo</li>
                </ul>
                @auth
    <a href="{{ url('habitacion_lujo') }}" class="block mx-auto mt-4 w-40 bg-blue-600 text-white text-center py-3 rounded-lg text-xl font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">Reservar</a>
@else
    <a href="{{ route('login') }}" class="block mx-auto mt-4 w-40 bg-gray-800 text-white text-center py-3 rounded-lg text-xl font-semibold hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 transition duration-300">Inicia sesión para reservar</a>
@endauth</div>
        </div>
    
        <!-- Habitación 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
           <!-- Etiqueta <img> con anchura y altura especificadas -->
<img src="suite.jpg" alt="Room 3" class="w-full object-cover" style="width: 450px; height: 250px;">

            <div class="p-6 flex-grow">
                <h3 class="text-xl font-semibold mb-2">Suite Familiar</h3>
                <p class="text-gray-700 mb-4">Perfecta para familias que desean comodidad y espacio extra.</p>
                <ul class="text-gray-700 mb-4">
                    <li>Precio: $200/noche</li>
                    <li>Capacidad: 4 personas</li>
                    <li>Tipo: Suite</li>
                </ul>
                @auth
    <a href="{{ url('suite_familiar') }}" class="block mx-auto mt-4 w-40 bg-blue-600 text-white text-center py-3 rounded-lg text-xl font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">Reservar</a>
@else
    <a href="{{ route('login') }}" class="block mx-auto mt-4 w-40 bg-gray-800 text-white text-center py-3 rounded-lg text-xl font-semibold hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 transition duration-300">Inicia sesión para reservar</a>
@endauth </div>
        </div>
    
        <!-- Puedes continuar añadiendo más habitaciones aquí -->
    
    </div>
    
</main>

@endsection