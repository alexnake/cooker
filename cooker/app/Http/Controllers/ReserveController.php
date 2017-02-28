<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * @param Illuminate\Http\Request $request
     * @return
     */
    public function makeReserve(Request $request)
    {
        $data = $request->all();
        
        $mensaje = 'Nombre: ' . $data['nom'] . "\nTelefono: " . $data['phone'] . "\nEmail: " . $data['email'] . "\nMensaje: " . $data['message'];
        mail('manerogutierrez.alejandro@gmail.com', 'Reserva cocina', $mensaje);
        
        return redirect()->back()->with('save', 'ok');
    }
}
