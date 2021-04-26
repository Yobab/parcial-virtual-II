<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $primaryKey = 'idgenero';
    protected $guarded = 'idgenero';
    public $timestamps = false;
    protected $table = 'genero';
}
