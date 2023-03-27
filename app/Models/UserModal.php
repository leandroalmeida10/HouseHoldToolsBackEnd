<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModal extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillabel = [
        'nome',              
        'cpf',               
        'email',             
        'cep',               
        'rua',               
        'numero',            
        'bairro',           
        'estado',            
        'password',          
        'confirmPassword'   
    ];

}
