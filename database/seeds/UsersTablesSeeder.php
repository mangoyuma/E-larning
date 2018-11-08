<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
    	User::create([
    		'name' =>'Yuma Ito',
    		'email' =>'yuma1219@hotmail.co.jp',
    		'password' => Hash::make('password'),
    		　　　　　　　//パスワード保存
    		'remember_token'=> str_random(10),
    	//認証が無制限に持続　
    	]);
    }
}
