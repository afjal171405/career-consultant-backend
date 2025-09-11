<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use modules\Admin\app\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CustomerSeeder::class);
    }
}
