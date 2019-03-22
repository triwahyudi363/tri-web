<?php

use Illuminate\Database\Seeder;

class tampilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert(array(['title' => 'website', 'body'=> 'ini web saya',],['title' => 'website', 'body'=> 'ini web saya',]));
    }
}
