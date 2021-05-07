<?php

use App\Product;
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
        // $this->call(UserSeeder::class);
        $product_array =[


            //Users Section
            ['name' => 'First','buy_rate'=>10.00,'sale_price'=>20.00],
            ['name' => 'Sec','buy_rate'=>50.00,'sale_price'=>20.00],
            ['name' => 'Thi','buy_rate'=>10.00,'sale_price'=>76.00],
            ['name' => 'Five','buy_rate'=>10.00,'sale_price'=>20.00],
            ['name' => 'Fifth','buy_rate'=>76.00,'sale_price'=>20.00],
            ['name' => 'Thirty','buy_rate'=>10.00,'sale_price'=>50.00],
            ['name' => 'Fifty','buy_rate'=>10.00,'sale_price'=>20.00],
            ['name' => 'Eighty','buy_rate'=>50.00,'sale_price'=>20.00],
            ['name' => 'Sample','buy_rate'=>10.00,'sale_price'=>20.00],
            ['name' => 'No','buy_rate'=>10.00,'sale_price'=>76.00],
            ['name' => 'Bad','buy_rate'=>10.00,'sale_price'=>50.00],
            ['name' => 'Good','buy_rate'=>76.00,'sale_price'=>20.00],
            ['name' => 'First','buy_rate'=>10.00,'sale_price'=>20.00]

        ];

        Product::create($product_array);
    }
}
