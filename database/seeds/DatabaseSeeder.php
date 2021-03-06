<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
		     array(
		       'title' => 'Admin',
		       'created_at' => Carbon::now(),
		       'updated_at' => Carbon::now(),
		     ),
		     array(
		       'title' => 'User',
		       'created_at' => Carbon::now(),
		       'updated_at' => Carbon::now(),
		     ),
   		));
    }
}
