<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'jose@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now()
        ]);
    }
}
