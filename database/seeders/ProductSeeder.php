<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'product_1',
            'product_description' => 'lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum ',
            'product_price' => 100
        ]);
        Product::create([
            'product_name' => 'product_2',
            'product_description' => 'lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum ',
            'product_price' => 100
        ]);
        Product::create([
            'product_name' => 'product_3',
            'product_description' => 'lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum ',
            'product_price' => 100
        ]);
        Product::create([
            'product_name' => 'product_4',
            'product_description' => 'lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum ',
            'product_price' => 100
        ]);
        Product::create([
            'product_name' => 'product_5',
            'product_description' => 'lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum lorem ipmsum ',
            'product_price' => 100
        ]);
    }
}
