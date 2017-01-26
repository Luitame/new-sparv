<?php

use App\Models\ModeloRegraExtra;
use Illuminate\Database\Seeder;

class ModeloRegraExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ModeloRegraExtra::class, 20)->create();
    }
}
