<?php

use App\Category;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'name' => 'Calzados',
            'url' => 'https://picsum.photos/200/300',
            'created_at' => Carbon::now()
        ]);
    }
}
