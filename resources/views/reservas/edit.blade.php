@extends('layouts.user')

@section('title', 'Edit')

@section('contents')

<div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
    <h3 class="text-2xl font-bold text-center text-blue-600 mb-6">¡Edita tu reserva!</h3>
    <form action="{{ route('reserva.update', $reserva->id) }}" method="POST">
        @csrf <!-- Agrega el token CSRF -->
        @method('PUT')
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
        <input type="hidden" id="cuarto" name="cuarto" value="habitacion_estandar">
        <input type="hidden" id="precio_por_noche" name="precio_por_noche" value="100">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3">
            <div>
                <label for="fecha_llegada" class="block text-sm font-semibold text-gray-800 mb-1">Fecha de llegada</label>
                <input type="date" id="fecha_llegada" name="fecha_llegada" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" required value="{{$reserva->fecha_llegada}}">
            </div>
            <div>
                <label for="fecha_salida" class="block text-sm font-semibold text-gray-800 mb-1">Fecha de salida</label>
                <input type="date" id="fecha_salida" name="fecha_salida" class="w-full border-gray-500 border-2 rounded-md p-2 focus:outline-none focus:border-blue-500" required value="{{$reserva->fecha_salida}}">
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
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-500 focus:outline-none">Guardar cambios</button>
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


@endsection
