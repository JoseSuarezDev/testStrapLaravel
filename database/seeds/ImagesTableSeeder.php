<?php

use App\Image;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::insert([
            'url'=> 'https://picsum.photos/200/300',
            'product_id'=> 1,
            'created_at' => Carbon::now()
        ]);
        Image::insert([
            'url'=> 'https://picsum.photos/200/300',
            'product_id'=> 1,
            'created_at' => Carbon::now()
        ]);
        Image::insert([
            'url'=> 'https://picsum.photos/200/300',
            'product_id'=> 2,
            'created_at' => Carbon::now()
        ]);
    }
}
