<?php

use App\Models\Tempo;
use Illuminate\Database\Seeder;

class TempoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tempo::class, 30)->create();
    }
}
