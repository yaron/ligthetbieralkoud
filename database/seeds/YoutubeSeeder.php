<?php

use Illuminate\Database\Seeder;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtubes')->insert([
          'youtube_id' => 'Ish_BwyjOso',
          'used' => 0,
        ]);
    }
}
