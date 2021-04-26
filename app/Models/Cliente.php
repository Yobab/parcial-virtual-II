<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'nit';
    protected $guarded = '';
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'cliente';
}
