<?php

use Illuminate\Database\Seeder;

use App\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            "matricula" => "201613359",
            "nome" => "Ygor Costa",
            "endereco" => "qnp 19 conjunto c",
            "bairro" => "p norte",
            "cep" => "72241803",
            "cidade" => "ceilândia",
            "uf" => "DF",
            "email" => "ygorcosta01@gmail.com",
            "data" => "2016-02-12"            
        ]);

        Aluno::create([
            "matricula" => "201513359",
            "nome" => "Maria Barbosa",
            "endereco" => "qnm 13 conjunto h",
            "bairro" => "m norte",
            "cep" => "72546859",
            "cidade" => "ceilândia",
            "uf" => "DF",
            "email" => "maria.barbosa@gmail.com",
            "data" => "2014-03-26"            
        ]);

        Aluno::create([
            "matricula" => "201713359",
            "nome" => "Lorena Maria",
            "endereco" => "quadra 24 conjunto f",
            "bairro" => "bicario",
            "cep" => "72241803",
            "cidade" => "taguatinga",
            "uf" => "DF",
            "email" => "lorena.maria@gmail.com",
            "data" => "2013-02-27"            
        ]);

        Aluno::create([
            "matricula" => "201813359",
            "nome" => "Marcos Lourenco",
            "endereco" => "quadra 43 rua 27",
            "bairro" => "guará",
            "cep" => "45688803",
            "cidade" => "guará",
            "uf" => "DF",
            "email" => "marcos.lourenco@gmail.com",
            "data" => "2017-03-12"            
        ]);

        Aluno::create([
            "matricula" => "201413359",
            "nome" => "Mariana Lima",
            "endereco" => "quadra 28 conjunto l",
            "bairro" => "bicario",
            "cep" => "45865485",
            "cidade" => "taguatinga",
            "uf" => "DF",
            "email" => "mariana.lima@gmail.com",
            "data" => "2013-03-05"            
        ]);

        
    }
}
