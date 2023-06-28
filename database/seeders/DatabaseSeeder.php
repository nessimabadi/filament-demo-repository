<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

        \App\Models\User::factory()
            ->has(Tag::factory()->count(5))
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
    }
}
