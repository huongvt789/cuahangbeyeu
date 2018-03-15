<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates=[
        	['c_name'=>'Sữa Alaska','slug'=>'sua-alaska'],
        	['c_name'=>'Sữa XO','slug'=>'sua-xo'],
        	['c_name'=>'Sữa Abbott','slug'=>'sua-abbott'],
        	['c_name'=>'Sữa Zin Zin','slug'=>'sua-zin-zin'],
        	['c_name'=>'Sữa Mộc Châu','slug'=>'sua-moc-chau'],
            ['c_name'=>'Sữa Ông Thọ','slug'=>'sua-ong-tho'],
            ['c_name'=>'Sữa Similac','slug'=>'sua-simmilac'],
            ['c_name'=>'Sữa PediaSure','slug'=>'sua-pediasure'],
            ['c_name'=>'Sữa Cô gái Hà Lan','slug'=>'sua-co-gai-ha-lan'],
            ['c_name'=>'Sữa Vinamilk','slug'=>'sua-vinamilk'],
        ];
        DB::table('category')->insert($cates);
    }
}
