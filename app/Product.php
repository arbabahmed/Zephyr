<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'description', 'status'
    ];

    public function manufacturing_orders() {
    	return $this->hasMany('App\ManufacturingOrder');
    }

}
