<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tenant = Tenant::create(['id' => 'foo']);

        $tenant->domains()->create([
            'domain' => $tenant->id
        ]);

        Tenant::all()->runForEach(function () {
            User::factory(10)->create();
        });

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
