<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MOCheck extends Model
{
    protected $table = 'm_o_checks';

    protected $fillable = [
        'mo_id', 'user_id', 'status'
    ];
}
