<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Slide::insert([
        	['link'=>'','image'=>'banner_01.jpg']
        	]);
    }
}
