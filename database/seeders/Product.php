<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Product extends Seeder
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
                'name'=>'OnePlus 9',
                'sname'=>'OnePlus 9 5G',
                "price"=>"50000",
                "category"=>"Mobile",
                "description"=>"Triple Camera Co-Developed by Hasselblad, 48 MP Main camera, 50 MP Ultra Wide Angle Camera with Free Form Lens,
                2 MP Monochorme Lens",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Sony Bravia',
                'sname'=>'Sony Bravia 4K Ultra HD Tv',
                "price"=>"60000",
                "category"=>"TV",
                "description"=>"A smart tv with much more feature Resolution: 4K Ultra HD (3840x2160)",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Samsung Washing Machine',
                'sname'=>'Samsung 6.5 kg Fully-Automatic Washing Machine',
                "price"=>"15000",
                "category"=>"Washing Machine",
                "description"=>"Fully-automatic top load washing machine: Affordable with great wash quality,",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'LG Refrigerator',
                'sname'=>'LG 190 L 4 Star Inverter Direct-Cool Single Door Refrigerator',
                "price"=>"18000",
                "category"=>"fridge",
                "description"=>"Direct-cool refrigerator: Economical and Cooling without fluctuation Capacity 190 litres",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'HP Laptop',
                'sname'=>'HP 15 (2021) Thin & Light Ryzen 3-3250 Laptop',
                "price"=>"40000",
                "category"=>"laptop",
                "description"=>"Processor: AMD Ryzen 3 3250U (2.6 GHz base clock, up to 3.5 GHz max boost clock,)",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Blue Star AC',
                'sname'=>'Blue Star 1.5 Ton 4 Star Inverter Split AC',
                "price"=>"37000",
                "category"=>"ac",
                "description"=>"R32-Eco Friendly Refrigerant,Copper Condenser Coil,Self Clean Technology,Self Diagnosis",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'iPhone 11',
                'sname'=>'Apple iPhone 11 (128GB)',
                "price"=>"58000",
                "category"=>"Mobile",
                "description"=>"6.1-inch (15.5 cm diagonal) Liquid Retina HD LCD display Water and dust resistant",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Sony Earphones',
                'sname'=>'Sony WI-C200 Wireless In-Ear Headphones',
                "price"=>"5000",
                "category"=>"other",
                "description"=>"Usage : Wireless Headphones for casual and daily usage Quick Charge : Quick charge in 10mins for 60mins playback.",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Samsung Tv',
                'sname'=>'Samsung 125 cm (50 Inches) Wondertainment Series Ultra HD',
                "price"=>"65000",
                "category"=>"TV",
                "description"=>"Resolution: 4K Ultra HD (3840x2160) | Refresh Rate: 60 hertz Connectivity: 3 HDMI ports",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Dell Laptop',
                'sname'=>'Dell Inspiron 5370 13.3-inch FHD Laptop ',
                "price"=>"43000",
                "category"=>"laptop",
                "description"=>"GHz Intel Core i7 - 8550 U processor 8GB DDR4 RAM 256GB hard drive",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Whirlpool Washing Machine',
                'sname'=>'Whirlpool 7 Kg 5 Star Royal Plus Fully-Automatic Washing Machine',
                "price"=>"33000",
                "category"=>"Washing Machine",
                "description"=>"LED Digital Display Power Scrub Technology: creates superior 3 way agitations",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ]
        ]);
    }
}
