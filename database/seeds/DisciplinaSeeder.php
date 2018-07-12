<?php

use Illuminate\Database\Seeder;

use App\Disciplina;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplinas = ["Matemática", "Português", "Física"];

        foreach($disciplinas as $disciplina){
            Disciplina::create([
                "nome" => $disciplina
            ]);
        }
    }
}
