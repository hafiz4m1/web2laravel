<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baramg extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $guarded = ['id'];
    public $timestamps = false;
}
