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
        if ($this->reserves->getByDate($request->get('date'))) {
            $newReserve = Reserves::create($request->all());
        }

        if ($newReserve) {
            return view('reserve')->with('reserveDone', '1');
        }

        return $this->index()->with('reserveDone', '0');
    }
}
