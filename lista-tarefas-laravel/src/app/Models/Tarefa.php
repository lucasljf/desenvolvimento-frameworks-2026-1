<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['titulo', 'descricao', 'status', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
