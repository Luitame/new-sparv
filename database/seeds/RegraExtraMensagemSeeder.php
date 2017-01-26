<?php

use App\Models\RegraExtraMensagem;
use Illuminate\Database\Seeder;

class RegraExtraMensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RegraExtraMensagem::class, 20)->create();
    }
}
