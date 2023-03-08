<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Database\Factories\FactoryHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('products')->truncate();
        $products = Product::factory(10)->create();

        foreach ($products as $product)
        {
            $product->categories()->sync(FactoryHelper::getRandomModelId(Category::class));
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
