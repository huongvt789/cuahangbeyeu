<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	for($i=0;$i<10;$i++){
    		$name=$faker->realText(10,1);
    		$slug=str_slug($name.'-'.microtime(),'-');
    		$products=[
    			'fk_category_id'=>rand(1,10),
    			'p_name'=>$name,
    			'p_description'=>$faker->realText(100,3),
    			'p_content'=>$faker->realText(200,3),
    			'p_hotproduct'=>1
    		];
    		DB::table('product')->insert($products);
    	} 
    }
}
