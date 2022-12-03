<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $table = 'carrinho';

    protected $fillable = [
        'compras_id',
        'produtos_id',
        'quantidade',
        'preco',
    ];
}
