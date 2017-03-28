<?php

namespace App\Http\Controllers;

use App\Models\Reserves;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    
    /**
     * Implementation of Reserves Model
     *
     * @var App\Models\Reserves $reserves;
     */
    protected $reserves;

    /**
     * Creates new instance of Reserves
     *
     * @param App\Models\Reserves $reserves
     */
    public function __construct(Reserves $reserves)
    {
        $this->reserves = $reserves;
    }
    
    /**
     * Index function
     *
     * @return Illuminate\Contracts\View\View
     */
    public function index()
    {
        $reserves = Reserves::select('date')->get();
        $dates = [];
        
        foreach ($reserves as $reserve) {
            $dates[] = $reserve['date'];
        }
        
        return view('reserve')->with('reserves', implode(',', $dates));
    }
    
    /**
     * Make a reserve
     *
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Contracts\View\View
     */
    public function makeReserve(Request $request)
    {
        $data = $request->all();
        
        $mensaje = 'Nombre: ' . $data['name'] . "\nTelefono: " . $data['phone'] . "\nEmail: " . $data['email'] . "\nMensaje: " . $data['message'];
        //mail('manerogutierrez.alejandro@gmail.com', 'Reserva cocina', $mensaje);

        $newReserve = null;
        
        if (is_null($this->reserves->getByDate($request->get('date'))->first())) {
            $newReserve = Reserves::create($request->all());
        }

        if (!is_null($newReserve)) {
            return redirect()->back()->with('reserveDone', 'ok');
            ;
        }

        return redirect()->back()->with('reserveNotDone', 'error');//$this->index()->with('reserveDone', '0');
    }
}
