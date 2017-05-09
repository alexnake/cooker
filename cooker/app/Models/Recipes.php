<?php

/*
    Author -> Alejandro Manero
    Recipes Model
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    
    /**
     * Constant of tag NEW
     *
     * @var String
     *
     */
    const NEW = 'NEW';
    
    /**
     * Constant of tag clasic
     *
     * @var String
     *
     */
    const CLASSIC = 'CLASSIC';
    
    /**
     * Constant of status for a pending lobby
     *
     * @var String
     *
     */
    const DESSERT = 'DESSERT';
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'photo', 'summary', 'description', 'tags', 'price'
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
        'title' => '',
        'photo' => '',
        'summary' => '',
        'description' => '',
        'tags' => 'NEW',
        'price' => '0'
    ];
    
    /**
     * Get last ten recipes from DDBB
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getLastTen()
    {
        return $this->orderBy('created_at', 'desc')->limit('10')->get();
    }
    
    /**
     * Get clasic recipes order by date from DDBB
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getClasicsOrderByDateDesc()
    {
        return $this->where('tags', '=', 'clasico')->orderBy('created_at', 'desc')->get();
    }
}
