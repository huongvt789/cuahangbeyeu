<?php

use Illuminate\Database\Seeder;

class ProducerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producers=[
        	['email'=>'vinamilk@gmail.com','name'=>'Vinamilk','phone'=>'123456789','address'=>'Hà Nam'],
        	['email'=>'mocchau@gmail.com','name'=>'Mộc Châu','phone'=>'123456789','address'=>'Hà Nội'],
        	['email'=>'thanhnam@gmail.com','name'=>'Thành Nam','phone'=>'123456789','address'=>'Hà Nội'],
        ];
        DB::table('producer')->insert($producers);
    }
}
