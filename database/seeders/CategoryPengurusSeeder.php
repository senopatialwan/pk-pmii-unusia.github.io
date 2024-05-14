<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryPengurus;

class CategoryPengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryPengurus::create(['name' => 'Komisariat']);
        CategoryPengurus::create(['name' => 'Biro']);
        CategoryPengurus::create(['name' => 'Kopri']);
    }
}
