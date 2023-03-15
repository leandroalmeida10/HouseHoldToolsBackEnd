<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterNewUsers extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'identify',
        'nome',
        'email',
        'senha',
        'cpf',
        'cep',
        'rua',
        'numero',
        'bairro',
        'estado',
    ];
}