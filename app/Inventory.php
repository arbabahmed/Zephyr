<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';

	protected $fillable = [
		'ingredient_id','product_id', 'quantity','unit','status'
	];
}
