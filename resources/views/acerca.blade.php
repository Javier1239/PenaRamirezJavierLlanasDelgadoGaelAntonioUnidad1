@extends('layouts.user')

@section('title', 'Acerca')

@section('contents')

<main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <section class="text-center mb-8 bg-gray-200 py-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">¡Bienvenido a nuestro hotel!</h2>
        <p class="mt-2 text-lg text-gray-600">Descubre la experiencia que te espera</p>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="banner1.jpg" alt="Imagen del hotel" class="w-full mb-4 rounded-md shadow-md" style="width: 450px; height: 250px;>
            <h2 class="text-xl font-bold mb-2">Nuestra historia:</h2>
            <p class="mb-4">En nuestro hotel, nos dedicamos a ofrecer una experiencia excepcional a cada uno de nuestros huéspedes. Con una combinación perfecta de comodidad, lujo y atención al detalle, hacemos que tu estancia sea inolvidable.</p>
            <p class="mb-4">Con una ubicación privilegiada en el corazón de la ciudad, estamos cerca de las principales atracciones y ofrecemos fácil acceso a todo lo que necesitas para una estancia perfecta.</p>
            <p>Ya sea que estés de vacaciones o en un viaje de negocios, nuestro hotel es tu hogar lejos de casa.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="servicios.png" alt="Imagen del hotel" class="w-full mb-4 rounded-md shadow-md" style="width: 450px; height: 250px;>
            <h2 class="text-xl font-bold mb-2">Servicios:</h2>
            <ul class="mb-4">
                <li>Habitaciones cómodas y bien equipadas</li>
                <li>Restaurante de alta calidad con cocina local e internacional</li>
                <li>Spa y centro de bienestar para relajarte y rejuvenecer</li>
                <li>Gimnasio totalmente equipado para mantenerte en forma</li>
                <li>Piscina al aire libre con vistas impresionantes</li>
                <li>Servicio de conserjería las 24 horas para atender todas tus necesidades</li>
            </ul>
            <p>En nuestro hotel, nos esforzamos por superar tus expectativas en cada aspecto. ¡Esperamos darte la bienvenida pronto!</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
        <h2 class="text-xl font-bold mb-2">Contáctanos:</h2>
        <p class="mb-4">Si tienes alguna pregunta o necesitas más información sobre nuestro hotel, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte en todo lo que necesites.</p>
        <ul class="mb-4">
            <li><strong>Dirección:</strong> Av. Principal 123, Saltillo, México</li>
            <li><strong>Teléfono:</strong> +52 844-529-1303</li>
            <li><strong>Correo electrónico:</strong> <a href="mailto:info@securestay.com">info@securestay.com</a></li>
        </ul>
        <p>¡Esperamos tener noticias tuyas pronto!</p>
    </div>
</main>

@endsection