<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
	/**
	* The table associated with the model.
	*
	* @var string
	*/
	
    protected $table = 'my_flights';
	
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
