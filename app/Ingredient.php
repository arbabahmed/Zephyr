<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
	protected $table = 'ingredients';

    protected $fillable = [
        'name', 'status'
    ];

    public function product() {
    	return $this->belongsToMany('App\Product','master_formulas','ingredient_id','product_id')->withPivot('*');
    }

    public function pending_orders() {
    	return $this->hasMany('App\PendingOrder','ingredient_id');	
    }
}
