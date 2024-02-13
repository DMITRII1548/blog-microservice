<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(9)->create([
            'role_id' => 1
        ]);

        User::factory(1)->create([
            'role_id' => 2
        ]);
    }
}
