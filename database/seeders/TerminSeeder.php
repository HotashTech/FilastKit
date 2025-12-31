<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Termin;
use Illuminate\Database\Seeder;

final class TerminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Termin::factory()->create([
            'name' => 'Mr. Termin',
            'email' => 'termin@hotash.tech',
        ]);
    }
}
