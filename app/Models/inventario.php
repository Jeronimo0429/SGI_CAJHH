<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'inventario';
    protected $fillable = ['serial','modelo','marca','valor','fechaAdquisicion','fechaSalida'];
}