@extends('layouts.user')

@section('title', 'Preguntas Frecuentes')

@section('contents')

<main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <section class="text-center mb-8 bg-gray-200 py-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Preguntas Frecuentes</h2>
        <p class="mt-2 text-lg text-gray-600">Aquí encontrarás respuestas a algunas preguntas comunes.</p>
    </section>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <div class="bg-gray-200 rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2"><strong>¿Cuáles son los métodos de pago aceptados?</strong></h3>
            <p>Aceptamos pagos con tarjeta de crédito y débito Visa, Mastercard, American Express, así como PayPal.</p>
        </div>
        <div class="bg-gray-200 rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2"><strong>¿Cómo puedo cancelar mi reserva?</strong></h3>
            <p>Para cancelar tu reserva, por favor contáctanos por teléfono o correo electrónico al menos 48 horas antes de tu fecha de llegada.</p>
        </div>
        <div class="bg-gray-200 rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2"><strong>¿Ofrecen servicio de transporte desde el aeropuerto?</strong></h3>
            <p>Sí, ofrecemos servicio de transporte desde y hacia el aeropuerto. Por favor, contáctanos para más detalles y reserva anticipada.</p>
        </div>
        <div class="bg-gray-200 rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2"><strong>¿Hay estacionamiento disponible?</strong></h3>
            <p>Sí, contamos con un estacionamiento gratuito para nuestros huéspedes.</p>
        </div>
        <div class="bg-gray-200 rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2"><strong>¿Se permiten mascotas?</strong></h3>
            <p>Lamentablemente, no permitimos mascotas en nuestras instalaciones, excepto perros guía para personas con discapacidad.</p>
        </div>
        <div class="bg-gray-200 rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2"><strong>¿Cuál es la política de cancelación?</strong></h3>
            <p>Nuestra política de cancelación varía según el tipo de habitación y la tarifa seleccionada. Por favor, consulta los detalles al momento de realizar tu reserva o contáctanos para más información.</p>
        </div>
    </div>
</main>

@endsection
