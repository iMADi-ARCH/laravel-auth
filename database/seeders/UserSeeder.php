<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Helpers\FKTruncateHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // User::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
        FKTruncateHelper::truncate(User::class);
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
