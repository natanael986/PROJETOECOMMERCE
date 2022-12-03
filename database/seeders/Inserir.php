<?php

namespace Database\Seeders;

use App\Models\Categorias;
use App\Models\Fornecedores;
use App\Models\Produtos;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Inserir extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => bcrypt('senha123'),
        ])->givePermissionTo('admin');

        Fornecedores::create([
            'nome' => 'Natanael',
            'telefone' => '18981253417',
            'logradouro' => 'Rua Da Silva Guideo',
            'cep' => '19098675',
            'cidade' => 'Presidente Prudente',
            'estado' => 'SP',
            'razao_social' => 'Estou sempre a procura',
        ]);
        Fornecedores::create([
            'nome' => 'Marcos',
            'telefone' => '18982221417',
            'logradouro' => 'Rua Gimenez de Souza',
            'cep' => '19098225',
            'cidade' => 'Presidente Bernades',
            'estado' => 'SP',
            'razao_social' => 'Estou aqui para tudo',
        ]);
        Fornecedores::create([
            'nome' => 'Isabela',
            'telefone' => '18981233417',
            'logradouro' => 'Rua Emilio da Guideo Souza',
            'cep' => '19098675',
            'cidade' => 'Presidente Prudente',
            'estado' => 'SP',
            'razao_social' => 'Por aqui mesmo',
        ]);

        Categorias::create([
            'nome' => 'Naruto',
            'descricao' => 'Artes baseadas na obra de Naruto, animação japosesa!!!',
        ]);
        Categorias::create([
            'nome' => 'Jujutsu Kaisen',
            'descricao' => 'Artes baseadas na obra de Jujutsu Kaisen, animação japosesa!!!',
        ]);
        Categorias::create([
            'nome' => 'Demon Slayer',
            'descricao' => 'Artes baseadas na obra de Demon Slayer, animação japosesa!!!',
        ]);

        Produtos::create([
            'nome' => 'C. Naruto',
            'descricao' => 'Camiseta baseada na obra japonesa Naruto',
            'preco' => 110,
            'imagem' => 'images/camiseta.png',
            'quantidade' => 22,
            'id_Fornecedor' => 1,
            'id_Categoria' => 1,
        ]);
        Produtos::create([
            'nome' => 'C. Obito',
            'descricao' => 'Camiseta baseada na obra japonesa Naruto',
            'preco' => 130,
            'imagem' => 'images/camiseta.png',
            'quantidade' => 22,
            'id_Fornecedor' => 1,
            'id_Categoria' => 1,
        ]);
        Produtos::create([
            'nome' => 'C. Madara',
            'descricao' => 'Camiseta baseada na obra japonesa Naruto',
            'preco' => 160,
            'imagem' => 'images/camiseta.png',
            'quantidade' => 22,
            'id_Fornecedor' => 1,
            'id_Categoria' => 1,
        ]);

        Produtos::create([
            'nome' => 'C. Sasuke',
            'descricao' => 'Camiseta baseada na obra japonesa Naruto',
            'preco' => 100,
            'imagem' => 'images/camiseta.png',
            'quantidade' => 22,
            'id_Fornecedor' => 1,
            'id_Categoria' => 1,
        ]);
        Produtos::create([
            'nome' => 'C. Sakura',
            'descricao' => 'Camiseta baseada na obra japonesa Naruto',
            'preco' => 210,
            'imagem' => 'images/camiseta.png',
            'quantidade' => 22,
            'id_Fornecedor' => 1,
            'id_Categoria' => 1,
        ]);
        Produtos::create([
            'nome' => 'C. Kakashi',
            'descricao' => 'Camiseta baseada na obra japonesa Naruto',
            'preco' => 150,
            'imagem' => 'images/camiseta.png',
            'quantidade' => 22,
            'id_Fornecedor' => 1,
            'id_Categoria' => 1,
        ]);
    }
}
