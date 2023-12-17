<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            ProvincesSeeder::class,
            CitiesSeeder::class,
            DistrictsSeeder::class,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        Religion::create([
            'name' => 'Islam'
        ]);

        Religion::create([
            'name' => 'Kristen'
        ]);

        Religion::create([
            'name' => 'Katolik'
        ]);

        Religion::create([
            'name' => 'Hindu'
        ]);

        Religion::create([
            'name' => 'Buddha'
        ]);
    }
}
