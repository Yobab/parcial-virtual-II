<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $primaryKey = 'iddepartamento';
    protected $guarded = 'iddepartamento';
    public $timestamps = false;
    protected $table = 'departamento';
}
