<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Permite inserção em massa de nome e cor
    protected $fillable = ['nome', 'cor'];
}