<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name' => 'LG mobile',
            'price' => '200',
            'description' => 'A smartphone with 4GB RAM',
            'category' => 'mobile',
            'gallery' => 'https://media.wired.com/photos/5b22dcc7714d3b70d9ed7f32/master/w_2560%2Cc_limit/LG-V30-Cloud-SilverTA.jpg'
        
            ],
       
            [
            'name' => 'Iphone ',
            'price' => '1000',
            'description' => 'A smartphone with 4GB RAM',
            'category' => 'mobile',
            'gallery' => 'https://www.apple.com/newsroom/images/product/iphone/standard/Apple_new-iphone-se-white_04152020_big.jpg.small_2x.jpg'
        
            ],
         
            [
                'name' => 'Samsung Note 20 ',
                'price' => '1000',
                'description' => 'A smartphone with 4GB RAM',
                'category' => 'mobile',
                'gallery' => 'https://zdnet3.cbsistatic.com/hub/i/2020/06/05/d91bb05c-28a2-4d48-b12c-712483ff4786/galaxy-s20-5g.jpg'
            
            ]
        
        
        
        
            ]);
        //
    }
}
