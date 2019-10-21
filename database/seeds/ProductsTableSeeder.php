<?php

use App\Product;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            'name'=> 'Zapato',
            'price'=> 100.00,
            'descripction'=> 'Zapato para dama',
            'created_at' => Carbon::now()
        ]);
        Product::insert([
            'name'=> 'Sandalias',
            'price'=> 300.00,
            'descripction'=> 'Sandalias para dama',
            'created_at' => Carbon::now()
        ]);
        DB::table('product_user')->insert([
            'user_id' => 1,
            'product_id' => 2,
            'created_at' => Carbon::now()
        ]);
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 1,
            'created_at' => Carbon::now()
        ]);
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 2,
            'created_at' => Carbon::now()
        ]);
    }
}
