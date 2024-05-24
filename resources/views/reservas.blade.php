@extends('layouts.user')
 
@section('title', 'Reservas')
 
@section('contents')

<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-8 text-center">¡Tus Reservas!</h2>

    <!-- Lista de reservas -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            $userReservas = $reservas->filter(function ($reserva) {
                return $reserva->email === Auth::user()->email;
            });
        @endphp

        @if ($userReservas->isEmpty())
            <div class="bg-gray-100 rounded-lg shadow-md p-8 flex flex-col items-center justify-center">
                <p class="text-3xl font-semibold mb-6">No tienes reservas</p>
                <p class="text-lg text-gray-600 mb-6">¿Listo para reservar tu próxima aventura?</p>
                <a href="{{ url('/rooms') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg text-lg">Explora nuestras habitaciones</a>
            </div>
        @else
            @foreach ($userReservas as $reserva)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <p class="text-2xl font-semibold mb-4"># Orden: {{ substr($reserva->codigo_pedido, 0, 10) }}</p>
                    <p class="text-lg text-gray-600 mb-2">{{ $reserva->email }}</p>
                    <p class="text-lg text-gray-600 mb-2">Cuarto: {{ $reserva->cuarto }}</p>
                    <p class="text-lg text-gray-600 mb-2">Fecha de llegada: {{ $reserva->fecha_llegada }}</p>
                    <p class="text-lg text-gray-600 mb-2">Fecha de salida: {{ $reserva->fecha_salida }}</p>
                    <p class="text-lg text-gray-600 mb-2">Precio: {{ $reserva->precio }}</p>
                    <a href="#" class="block mx-auto mt-4 w-40 bg-blue-600 hover:bg-blue-700 text-white text-center py-3 rounded-lg text-xl font-semibold">Pagar</a>

                    <a href="{{route('reserva.edit', $reserva->id)}}" class="block mx-auto mt-4 w-40 bg-blue-600 hover:bg-blue-700 text-white text-center py-3 rounded-lg text-xl font-semibold">Editar Reservación</a>

                </div>
                
            </div>            
            @endforeach
        @endif
    </div>
</div>


@endsection