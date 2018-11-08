<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
    	// 複数代入への制限を無効にする
        $this->call('UsersTableSeeder');
    }
}
