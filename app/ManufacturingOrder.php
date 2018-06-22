<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufacturingOrder extends Model
{

    protected $table = 'manufacturing_orders';

    protected $fillable = [
        'product_id', 'batch_size', 'unit','batch_no','author_id','qam_status','pm_status','status'
    ];

    public function products(){
    	return $this->belongsTo('App\Product','product_id');
    }

    public function authors() {
    	return $this->belongsTo('App\User','author_id');
    }

    public function pending_orders() {
        return $this->hasOne('App\PendingOrder','manufacture_order_id');
    }
}
