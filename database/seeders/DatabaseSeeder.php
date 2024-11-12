<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\Budget;
use App\Models\Catalog;
use App\Models\Client;
use App\Models\Config;
use App\Models\Counters;
use App\Models\CredibilityStatements;
use App\Models\Home;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'pedrocab498@gmail.com',
        ]);

        Home::factory()->create();

        Counters::factory()->create();

        AboutUs::Factory()->create();

        Catalog::factory()->create();

        CredibilityStatements::factory()->create();

        Budget::factory()->create();

        Client::factory()->create();

        Config::factory()->create();

    }
}
