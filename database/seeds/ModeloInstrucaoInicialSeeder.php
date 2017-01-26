<?php

use App\Models\ModeloInstrucaoInicial;
use Illuminate\Database\Seeder;

class ModeloInstrucaoInicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ModeloInstrucaoInicial::class, 20)->create();
    }
}
