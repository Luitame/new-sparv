<?php

use App\Models\Mensagem;
use Illuminate\Database\Seeder;

class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mensagem::class, 50)->create();
    }
}
