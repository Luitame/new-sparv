<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(InstrucaoInicialSeeder::class);
         $this->call(MensagemSeeder::class);
         $this->call(PerguntaSeeder::class);
         $this->call(TempoSeeder::class);
         $this->call(VisorPontuacaoSeender::class);
    }
}
