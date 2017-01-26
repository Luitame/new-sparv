<?php

use App\Models\ModeloFase;
use Illuminate\Database\Seeder;

class ModeloFaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ModeloFase::class, 20)->create();
    }
}
