<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
        	['email'=>'phanthang230696hn@gmail.com','password'=>Hash::make('12345'),'fullname'=>'Phan Quyết Thắng','phonenumber'=>'123456789','address'=>'Hà Nam'],
        	['email'=>'author@gmail.com','password'=>Hash::make('12345'),'fullname'=>'Author','phonenumber'=>'123456789','address'=>'Hà Nội']
        ];
        DB::table('users')->insert($users);
    }
}
