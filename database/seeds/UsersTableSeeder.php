<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Luítame de Oliveira',
            'email' => 'luitamy@hotmail.com',
            'role' => 'admin'
        ]);

        factory(User::class)->create([
            'name' => 'João Ilo',
            'email' => 'ilo@cemp.com.br',
            'role' => 'admin'
        ]);

        factory(User::class)->create([
            'name' => 'Igor Augusto',
            'email' => 'igoraugusto.pro@gmail.com',
            'roler' => 'researcher'
        ]);

        factory(User::class)->create([
            'name' => 'Clara Lima',
            'email' => 'silva.claralima@gmail.com',
            'roler' => 'researcher'
        ]);
    }
}
