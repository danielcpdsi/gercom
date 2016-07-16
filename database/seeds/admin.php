<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
        	'user' => 'admin',
        	'pass' => bcrypt('admin'),
        	]);
        DB::table('usuario')->insert([
        	'user' => 'victor',
        	'pass' => bcrypt('victor'),
        	]);
    }
}
