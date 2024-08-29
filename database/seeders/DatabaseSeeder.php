<?php

namespace Database\Seeders;

use App\Livewire\Visits;
use App\Models\User;
use App\Models\Country;
use App\Models\Visit;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create();

        Visit::factory(50)
            ->for($user)
            ->create();
    }
}
