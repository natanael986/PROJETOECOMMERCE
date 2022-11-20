<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
        'quantidade',
        'id_Fornecedor',
        'id_Categoria'
    ];

    public function categoria()
    {
        return $this->belongsToMany(Categorias::class);
    }

    public function fornecedor()
    {
        return $this->belongsToMany(Fornecedores::class);
    }

    public function comprasProduto()
    {
        return $this->belongsToMany(Compras::class, 'compra_produtos', 'produtos_id', 'compras_id')
            ->withPivot('quantidade', 'preco')
            ->withTimestamps();
    }
}
