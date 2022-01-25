<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dinner_table extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'capacity', 'description'];
}
