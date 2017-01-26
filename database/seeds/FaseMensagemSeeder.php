<?php

use App\Models\FaseMensagem;
use Illuminate\Database\Seeder;

class FaseMensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FaseMensagem::class, 20)->create();
    }
}
