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
                    'name'=>'Oppo mobile',
                    "price"=>"300",
                    "description"=>"A smartphone with 8gb ram and much more features",
                    "category"=>"mobile",
                    "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
                ],
                [
                    'name'=>'Panasonic Tv',
                    "price"=>"400",
                    "description"=>"A tv with much more features",
                    "category"=>"tv",
                    "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
                ],
                [
                    'name'=>'Soni Tv',
                    "price"=>"500",
                    "description"=>"A tv with much more features",
                    "category"=>"tv",
                    "gallery"=>"https://www.pngmart.com/files/6/LCD-Television-Transparent-PNG.png"
                ],
                [
                    'name'=>'LG Fridge',
                    "price"=>"600",
                    "description"=>"A Fridge with much more features",
                    "category"=>"fridge",
                    "gallery"=>"https://www.jungle.lk/wp-content/uploads/2019/12/LG-258L-Double-Door-Refrigerator-Scarlet-Orchid-GL-K292SPTL-image-3.jpg"
                ],
        ]);
    }
}
