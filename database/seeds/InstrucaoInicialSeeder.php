<?php

use App\Models\InstrucaoInicial;
use Illuminate\Database\Seeder;

class InstrucaoInicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(InstrucaoInicial::class, 50)->create();
    }
}
