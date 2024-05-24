<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function create(Request $request)
    {
        // Crear una nueva instancia de Reserva con los datos del formulario
        $reserva = new Comentarios();
        $reserva->name = $request->input('name');
        $reserva->comment = $request->input('comment');
        $reserva->datetime = $request->input('datetime');
        $reserva->cuarto = $request->input('cuarto');

        // Guardar la reserva en la base de datos
        $reserva->save();

        // Puedes redirigir a una página de éxito o hacer cualquier otra cosa aquí
        return redirect()->back();
    }

    public function mostrarComentarios()
    {
        // Obtener los comentarios filtrados por la habitación_estandar
        $comentarios = Comentarios::where('cuarto', 'habitacion_estandar')->get();
    
        // Pasar los comentarios a la vista
        return view('/habitacion_estandar', compact('comentarios'));
    }
    
    public function mostrarComentarios2()
    {
        // Obtener los comentarios filtrados por la habitación_estandar
        $comentarios = Comentarios::where('cuarto', 'habitacion_lujo')->get();
    
        // Pasar los comentarios a la vista
        return view('/habitacion_lujo', compact('comentarios'));
    }

    public function mostrarComentarios3()
    {
        // Obtener los comentarios filtrados por la habitación_estandar
        $comentarios = Comentarios::where('cuarto', 'suite_familiar')->get();
    
        // Pasar los comentarios a la vista
        return view('/suite_familiar', compact('comentarios'));
    }

}
