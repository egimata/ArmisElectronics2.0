<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'iPhone',
            'slug' => 'iphone',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone1',
            'slug' => 'iphone1',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone2',
            'slug' => 'iphone2',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone3',
            'slug' => 'iphone3',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone4',
            'slug' => 'iphone4',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone5',
            'slug' => 'iphone5',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone6',
            'slug' => 'iphone6',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone7',
            'slug' => 'iphone7',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone8',
            'slug' => 'iphone8',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
        Product::create([
            'name' => 'iPhone9',
            'slug' => 'iphone9',
            'details' => '5 inch, 256 Gb, 8Gb RAM',
            'price' => '120000',
            'description' => 'ruku ruku rukur ruku',
        ]);
    }
}
