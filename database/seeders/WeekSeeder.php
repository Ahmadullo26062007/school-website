<?php

namespace Database\Seeders;

use App\Models\week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        week::insert([
            ['name'=>"Dushanba"],
            ['name'=>"Seshanba"],
            ['name'=>"Chorshanba"],
            ['name'=>"Payshanba"],
            ['name'=>"Juma"],
            ['name'=>"Shanba"],
            ['name'=>"Yakshanba"],
        ]);
    }
}
