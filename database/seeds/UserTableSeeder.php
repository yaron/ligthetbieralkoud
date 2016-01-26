<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'yaron',
          'email' => str_random(10).'@oneshoe.com',
          'password' => bcrypt('secret'),
          'lastbrought' => '2016-01-26',
        ]);

        DB::table('users')->insert([
          'name' => 'robert',
          'email' => str_random(10).'@oneshoe.com',
          'password' => bcrypt('secret'),
          'lastbrought' => '2016-01-2',
        ]);

        DB::table('users')->insert([
          'name' => 'marino',
          'email' => str_random(10).'@oneshoe.com',
          'password' => bcrypt('secret'),
          'lastbrought' => '2016-01-23',
        ]);
    }
}
