<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Housing;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
             'name' => 'prova',
             'email' => 'prova@gmail.com',
             'password' => Hash::make('123456789')
         ]);
         User::factory()->create([
            'name' => 'prova2',
            'email' => 'prova2@gmail.com',
            'password' => Hash::make('123456789')
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.it',
            'password' => Hash::make('123456789')
        ]);

        Housing::factory()->count(4)->create();
        //Jobs::factory()->count(4)->create();
    }
}
