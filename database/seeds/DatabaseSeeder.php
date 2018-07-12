<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlunoSeeder::class);
        $this->call(DisciplinaSeeder::class);
        //$this->call(NotaSeeder::class);
    }
}
