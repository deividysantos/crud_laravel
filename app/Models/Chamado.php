<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;
    protected $table = 'chamado';
    protected $primaryKey = 'id';
    protected $fillable = ['setor_id', 'situacao_id', 'titulo', 'descricao', 'dataTermino'];
}
