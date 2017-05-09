<?php

/*
    Author -> Alejandro Manero
    Reserves Model
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserves extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'email', 'messaje', 'date', 'canceled'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    
    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => '',
        'phone' => '',
        'email' => '',
        'messaje' => '',
        'date' => '',
        'canceled' => '0'
    ];
    
    /**
     * Get reserve by date
     *
     * @param  string $date
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getByDate($date)
    {
        return $this->where('date', '=', $date)->get();
    }
}
