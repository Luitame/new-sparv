<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\InstrucaoInicial::class, function (Faker\Generator $faker) {
    return [
        'instrucaoTxt' => $faker->text($maxNbChars = 255),
    ];
});

$factory->define(App\Models\Mensagem::class, function (Faker\Generator $faker) {
    return [
        'mensagemTxt' => $faker->text($maxNbChars = 255),
    ];
});

$factory->define(App\Models\Pergunta::class, function (Faker\Generator $faker) {
    return [
        'perguntaTxt' => $faker->text($maxNbChars = 255),
    ];
});

$factory->define(App\Models\Tempo::class, function (Faker\Generator $faker) {
    return [
        'total' => '00:0' . $faker->numberBetween($min = 1, $max = 9) . ':0' . $faker->numberBetween($min = 0, $max = 9),
        'ordem' => $faker->randomElement(['crescente', 'decrescente']),
        'mudandoEm' => '00:00:00',
        'visibilidadeInicial' => $faker->randomElement(['visível', 'invisível'])
    ];
});

$factory->define(App\Models\VisorPontuacao::class, function (Faker\Generator $faker) {
    return [
        'visibilidadeInicial' => $faker->randomElement(['visível', 'invisível']),
        'mudandoEm' => '00:0' . $faker->numberBetween($min = 1, $max = 9) . ':0' . $faker->numberBetween($min = 0, $max = 9)
    ];
});

$factory->define(App\Models\Fase::class, function (Faker\Generator $faker) {
    return [
        'carta_id' => rand(1, 895),
        'criterio' => $faker->randomElement(['esquerdo', 'direito', 'ambos']),
        'pontos' => $faker->numberBetween($min = 0, $max = 13),
    ];
});

$factory->define(App\Models\RegraExtra::class, function (Faker\Generator $faker) {
    return [
        'inicio' => '00:0' . $faker->numberBetween($min = 1, $max = 9) . ':0' . $faker->numberBetween($min = 0, $max = 9),
        'fim' => '00:0' . $faker->numberBetween($min = 1, $max = 9) . ':0' . $faker->numberBetween($min = 0, $max = 9),
        'criterio' => $faker->randomElement(['esquerdo', 'direito', 'ambos']),
        'pontos' => $faker->numberBetween($min = 0, $max = 13)
    ];
});