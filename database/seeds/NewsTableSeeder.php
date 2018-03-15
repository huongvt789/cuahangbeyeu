<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	for($i=0;$i<100;$i++){
    		$name=$faker->realText(100,1);
    		$slug=str_slug($name.'-'.microtime(),'-');
    		$news=[
    			'n_name'=>$name,
    			'n_description'=>$faker->realText(200,3),
    			'n_content'=>$faker->realText(500,3),
    			'n_hotnews'=>1,
    			'author'=>$faker->name(),
    			'slug'=>$slug
    		];
    		DB::table('news')->insert($news);
    	}

    }
}
