<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "tb_departamento";
    protected$primaryKey = "depa_codi";
    public $timestams = false;
}
