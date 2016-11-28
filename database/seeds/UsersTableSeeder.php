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
    }
}
