<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TarefaCategoria extends Model
{
    protected $table = 'tarefas_categorias';
    
    protected $fillable = ['nome', 'cor', 'descricao'];
}
