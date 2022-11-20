<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
    ];

    public function produtoCompras()
    {
        return $this->belongsToMany(Produtos::class, 'compra_produtos', 'compras_id', 'produtos_id')
            ->withPivot('quantidade', 'preco')
            ->withTimestamps();
    }
}
