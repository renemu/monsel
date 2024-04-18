<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSensor extends Model
{
    use HasFactory;

    protected $table = 'tb_monsel';
    protected $primaryKey = 'id';
    protected $fillable = ['tegangan_total', 'arus_discharge', 'arus_charge', 'status_tegangan', 'status_penyeimbang'];
}
