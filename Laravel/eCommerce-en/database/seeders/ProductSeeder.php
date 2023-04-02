<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'iPhone',
                'price'=>'999',
                'category'=>'Phone',
                'description'=>'Apple - iPhone 14 Pro 128GB - Space Black (Verizon)',
                'gallery'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6487/6487386_sd.jpg;maxHeight=640;maxWidth=550'
            ],
            [
                'name'=>'ASUS Gaming Laptop',
                'price'=>'1299',
                'category'=>'Computer',
                'description'=>'ASUS - ROG Zephyrus 15.6" WQHD 165Hz Gaming Laptop-AMD Ryzen 9-16GB DDR5 Memory-NVIDIA GeForce RTX 3060-512GB PCIe 4.0 SSD - Eclipse Gray',
                'gallery'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6494/6494630_sd.jpg;maxHeight=640;maxWidth=550'
            ],
            [
                'name'=>'LG TV',
                'price'=>'469',
                'category'=>'TV',
                'description'=>'LG - 65” Class UQ75 Series LED 4K UHD Smart webOS TV',
                'gallery'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6501/6501938_rd.jpg;maxHeight=640;maxWidth=550'
            ],
            [
                'name'=>'Canon Camera',
                'price'=>'999',
                'category'=>'Camera',
                'description'=>'Canon - EOS R10 Mirrorless Camera with RF-S 18-45 f/4.5-6.3 IS STM Lens - Black',
                'gallery'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6508/6508510_sd.jpg;maxHeight=640;maxWidth=550'
            ],
            [
                'name'=>'Samsung Dishwasher',
                'price'=>'649',
                'category'=>'Dishwasher',
                'description'=>'Samsung - StormWash 24" Top Control Built-In Dishwasher with AutoRelease Dry, 3rd Rack, 48 dBA - Black Stainless Steel',
                'gallery'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6361/6361072_sd.jpg;maxHeight=640;maxWidth=550'
            ]
        ]);
    }
}
