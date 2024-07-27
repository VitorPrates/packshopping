<?php

namespace Database\Seeders;

use App\Models\listando;
use App\Models\produtos;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        $user = User::factory()-> create([
            'name' => 'João Moe',
            'email' => 'joao@gmail.com'
        ]);
        listando::factory(6) -> create([
            'user_id' => $user-> id
        ]);
        // produtos::factory(3) -> create([
        //     'user_id' => 5
        // ]);

        // listando::factory(6) -> create();
        // listando::create(
        //     [
        //         'Titulo' => 'laravel test 1',
        //         'tags' => 'laravel, api, backend, toasts',
        //         'empresa' => 'lara corp',
        //         'email' => 'lara@gmail.com',
        //         'website' => 'laravel.com.it',
        //         'local' => 'italia SP',
        //         'descri' => 'teste 1 do primeiro usuario de teste',
        //     ]
        // );
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
