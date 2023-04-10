<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillabel = [
        'id_Cliente',
        'nome',              
        'cpf',             
        'email',             
        'cep',               
        'rua',               
        'numero',            
        'bairro',           
        'estado',            
        'senha' 
    ];

    protected $guarded = [];

    protected static function booted()
{
    static::creating(fn(UserModel $userModel) => $userModel->id_Cliente = Str::uuid()->toString());
}


}
