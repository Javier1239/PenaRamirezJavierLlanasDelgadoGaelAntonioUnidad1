@extends('layouts.user')

@section('title', 'Contáctanos')

@section('contents')

<main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <section class="text-center mb-8 bg-gray-200 py-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Contáctanos</h2>
        <p class="mt-2 text-lg text-gray-600">¡Estamos aquí para ayudarte!</p>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Información de contacto:</h2>
            <ul class="mb-4">
                <li><strong>Dirección:</strong> Av. Principal 123, Saltillo, México</li>
                <li><strong>Teléfono:</strong> +52 844-529-1303</li>
                <li><strong>Correo electrónico:</strong> <a href="mailto:info@securestay.com">info@securestay.com</a></li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Horario de atención:</h2>
            <p class="mb-4">Lunes a Viernes: 9:00 am - 6:00 pm<br>
            Sábado y Domingo: Cerrado</p>

            <h2 class="text-xl font-bold mb-2">Redes sociales:</h2>
            <p class="mb-4">Síguenos en nuestras redes sociales para mantenerte al día con nuestras ofertas especiales, eventos y más!</p>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-blue-500 hover:text-blue-600"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#" class="text-blue-500 hover:text-blue-600"><i class="bi bi-instagram"></i></a></li>
                <li><a href="#" class="text-blue-500 hover:text-blue-600"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#" class="text-blue-500 hover:text-blue-600"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
        <h2 class="text-xl font-bold mb-2">Formulario de contacto:</h2>
        <form action="enviar.php" method="post" class="mb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="nombre" class="block mb-2">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="w-full border rounded-md px-4 py-2" required>
                </div>
                <div>
                    <label for="correo" class="block mb-2">E-mail:</label>
                    <input type="email" id="correo" name="email" placeholder="Correo electrónico" class="w-full border rounded-md px-4 py-2" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="mensaje" class="block mb-2">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" placeholder="Mensaje" class="w-full border rounded-md px-4 py-2" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Enviar</button>
        </form>

        <h2 class="text-xl font-bold mb-2">Preguntas frecuentes (FAQ):</h2>
        <p class="mb-4">Antes de ponerte en contacto con nosotros, consulta nuestras preguntas frecuentes para ver si tu pregunta ya ha sido respondida:  <a href="{{ url('/faq') }}" class="text-blue-500 hover:text-blue-600">Preguntas frecuentes</a></p>

        <h2 class="text-xl font-bold mb-2">¿Necesitas ayuda con una reserva?</h2>
        <p>Si necesitas ayuda para hacer o modificar una reserva, por favor, visita nuestra página de reservas o ponte en contacto con nuestro equipo de reservas al +52 8445291303.</p>
    </div>
</main>

@endsection
