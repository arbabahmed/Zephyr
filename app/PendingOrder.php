<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendingOrder extends Model
{
	protected $table = 'pending_orders';

	protected $fillable = [
		'code_no','quantity', 'ingredient_id','manufacture_order_id','assigned_quantity','issued_quantity','unit','issued_by_warehouse','verify_qa','received_by_prod'
	];
}
