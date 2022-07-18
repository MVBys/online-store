<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(50)->create();
        ProductGallery::factory(200)->create();

    }
}
