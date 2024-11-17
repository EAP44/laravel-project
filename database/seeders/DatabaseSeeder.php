<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Ayoub Elaouadi',
            'email' => 'ayoubelaouadi16@gmail.com',
        ]);
        \App\Models\User::factory(99)->create();
    }
}
