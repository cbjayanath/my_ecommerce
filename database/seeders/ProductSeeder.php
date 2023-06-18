<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //need to add DB class when adding a new Seeder

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Google Pixel 7a',
                'price' => '200,000',
                'category' => 'Mobile',
                'description' => 'The Google Pixel 7a specs are top-notch including a Snapdragon 8 Gen 2 chipset, 8GB RAM coupled with 128/256GB storage, and a 3900mAh battery.',
                'gallery'    => 'https://fdn2.gsmarena.com/vv/bigpic/google-pixel-7a.jpg'
    
            ],

            [
                'name' => 'Macbook Air',
                'price' => '250,000',
                'category' => 'Laptop',
                'description' => 'Graphics are powered by Integrated Graphics Processor. Connectivity options include Wi-Fi 802.11 a/b/g/n/ac, Bluetooth and it comes with Headphone and Mic Combo Jack ports.',
                'gallery'    => 'https://images.unsplash.com/photo-1625766763788-95dcce9bf5ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFjYm9vayUyMGFpcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80'
    
            ],

            [
                'name' => 'Smart TV',
                'price' => '350,000',
                'category' => 'TV',
                'description' => 'Include Extended Warranty Plus (2 Years Extended Warranty + Fire, Lightning, Electrical Inclusion, Explosion, Flood, Cyclone, Storm, Tempest & Natural Disasters Cover)',
                'gallery'    => 'https://www.singhagiri.lk/cdn/shop/products/tv2_600x.jpg?v=1683803377'
    
            ],

            [
                'name' => 'Apple Watch',
                'price' => '50,000',
                'category' => 'Watch',
                'description' => 'Apple Watch Series 8 specs: Display: 396 x 484 pixels OLED | Battery life: 18 hours | Dimensions: 45 x 38 x 10.7mm | Weight: 38.8 g (Al)',
                'gallery'    => 'https://www.zdnet.com/a/img/resize/40009748ef1c8e2a7156c2ae70728c70ab1b063e/2023/03/08/1ef3d65f-579c-42e6-bf66-6059185bd34c/apple-watch-sereis-8.jpg?auto=webp&fit=crop&height=360&width=640'
    
            ],

            [
                'name' => 'Lenovo Legion',
                'price' => '450,000',
                'category' => 'Laptop',
                'description' => 'Lenovo Legion is a line of consumer-oriented laptops and desktop computers designed, developed and marketed by Lenovo, targeting gaming performance.',
                'gallery'    => 'https://static.lenovo.com/ww/campaigns/2022/legion-brand/lenovo-campaign-legion-brand-agnostic-feature-2-5-series-mobile.jpg'
    
            ]


        ]);
        
    }
}
