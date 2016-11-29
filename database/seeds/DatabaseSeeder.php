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
         $this->call(TempoSeeder::class);
         $this->call(VisorPontuacaoSeender::class);
         $this->call(CartaSeeder::class);
         $this->call(FaseSeeder::class);
         $this->call(RegraExtraSeeder::class);
         $this->call(ModeloSeeder::class);
    }
}
