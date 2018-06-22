<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterFormula extends Model
{
    protected $table = 'master_formulas';

   	protected $fillable = [
        'quality_check,', 'ingredient_id', 'product_id', 'quantity', 'sachet','exact_w_w','checked_by_production','checked_by_quality_check', 'status'
    ];
}
