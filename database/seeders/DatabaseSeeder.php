<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'user_name' => 'Test User',
            'email' => 'test@example.com',
            'password' => "\$2y\$12\$Frzz9vLpchGjtCtixCOu3.EOzC36yjxZtPIMTYLssaK2m57RJmZp.", // password
            'user_type' => "admin",
        ]);
    }
}
