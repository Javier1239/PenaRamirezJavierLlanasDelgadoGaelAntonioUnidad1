@extends('layouts.user')
 
@section('title', 'habitacion_lujo')
 
@section('contents')

<section class="py-16 bg-white-100">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Texto llamativo -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">¡Descubre nuestra Habitación de Lujo!</h2>
            <p class="text-lg text-gray-600">Disfruta de lujo y confort en nuestra habitación de lujo.</p>
        </div>

        <!-- Imágenes de la habitación -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <img src="lujo.jpg" alt="Room 1" class="w-full object-cover rounded-lg">
            <img src="lujo 2.jpg" alt="Room 2" class="w-full object-cover rounded-lg">
            <img src="lujo 3.jpg" alt="Room 3" class="w-full object-cover rounded-lg">
        </div>

        <!-- Detalles de la habitación -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Detalles de la Habitación de Lujo</h3>
            <ul class="text-gray-700">
                <li>Precio: $150/noche</li>
                <li>Capacidad: 2 personas</li>
                <li>Tipo: De lujo</li>
                <li>Descripción: Habitación lujosa con espacio adicional y comodidades.</li>
            </ul>
        </div>

        <!-- Formulario de reserva -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">¡Reserva ahora!</h3>
            <form action="{{ route('reservar') }}" method="POST">
                @csrf <!-- Agrega el token CSRF -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-800 mb-1">Nombre</label>
                        <input type="text" id="name" name="name" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" readonly value="{{ Auth::user()->name }}">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-800 mb-1">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" readonly value="{{ Auth::user()->email }}">
                    </div>
                </div>
                <input type="hidden" id="cuarto" name="cuarto" value="habitacion_lujo">
                <input type="hidden" id="precio_por_noche" name="precio_por_noche" value="150">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3">
                    <div>
                        <label for="fecha_llegada" class="block text-sm font-semibold text-gray-800 mb-1">Fecha de llegada</label>
                        <input type="date" id="fecha_llegada" name="fecha_llegada" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="fecha_salida" class="block text-sm font-semibold text-gray-800 mb-1">Fecha de salida</label>
                        <input type="date" id="fecha_salida" name="fecha_salida" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="noches" class="block text-sm font-semibold text-gray-800 mb-1">Número de noches</label>
                    <input type="number" id="noches" name="noches" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" readonly>
                </div>
                <div class="mb-3">
                    <label for="monto_total" class="block text-sm font-semibold text-gray-800 mb-1">Monto total a pagar</label>
                    <input type="text" id="monto_total" name="precio" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" readonly>
                </div>
                <div class="mb-2">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-500 focus:outline-none">Reservar</button>
                </div>
            </form>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fechaLlegadaInput = document.getElementById('fecha_llegada');
                const fechaSalidaInput = document.getElementById('fecha_salida');
                const nochesInput = document.getElementById('noches');
                const precioPorNoche = parseInt(document.getElementById('precio_por_noche').value, 10);
                const montoTotalInput = document.getElementById('monto_total');
        
                fechaLlegadaInput.addEventListener('change', calcularNoches);
                fechaSalidaInput.addEventListener('change', calcularNoches);
        
                function calcularNoches() {
                    const fechaLlegada = new Date(fechaLlegadaInput.value);
                    const fechaSalida = new Date(fechaSalidaInput.value);
                    const diferenciaTiempo = fechaSalida.getTime() - fechaLlegada.getTime();
                    const diferenciaDias = diferenciaTiempo / (1000 * 3600 * 24);
                    nochesInput.value = diferenciaDias;
                    montoTotalInput.value = diferenciaDias * precioPorNoche;
                }
            });
        </script>

        <div class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold mb-8 text-center">Comentarios</h2>
        
            <!-- Formulario para agregar comentario -->
            <form class="mb-6" action="{{ route('comentario') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="text-gray-800 font-semibold block">Nombre</label>
                    <input type="text" id="name" name="name" class="border border-gray-700 rounded-md p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="comment" class="text-gray-800 font-semibold block">Comentario</label>
                    <textarea id="comment" name="comment" rows="4" class="border border-gray-700 rounded-md p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm" required></textarea>
                </div>
                <input type="hidden" id="datetime" name="datetime" value="{{ now() }}">
                <input type="hidden" id="cuarto" name="cuarto" value="habitacion_lujo">
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-md font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">Enviar</button>
                </div>
            </form>
        
            <!-- Lista de comentarios -->
            <div class="divide-y divide-gray-300">
                @foreach($comentarios as $comentario)
                    @if($comentario->cuarto === 'habitacion_lujo')
                        <div class="py-4">
                            <h3 class="text-lg font-semibold">{{ $comentario->name }}</h3>
                            <p class="text-gray-600 mb-2">{{ $comentario->comment }}</p>
                            <p class="text-sm text-gray-500">Fecha y hora: {{ $comentario->datetime }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            
        
            <!-- Paginación -->
            <div class="flex justify-center mt-8">
                <nav class="inline-flex">
                    <a href="#" class="bg-gray-200 text-gray-700 px-3 py-1 rounded-l-md hover:bg-gray-300">Anterior</a>
                    <a href="#" class="bg-gray-200 text-gray-700 px-3 py-1 hover:bg-gray-300">1</a>
                    <a href="#" class="bg-gray-200 text-gray-700 px-3 py-1 hover:bg-gray-300">2</a>
                    <!-- Agrega más enlaces según sea necesario -->
                    <a href="#" class="bg-gray-200 text-gray-700 px-3 py-1 rounded-r-md hover:bg-gray-300">Siguiente</a>
                </nav>
            </div>
        </div>
    </div>
</section>



@endsection