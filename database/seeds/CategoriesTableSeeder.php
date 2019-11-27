<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'Wheels']);
        DB::table('categories')->insert(['name'=>'Bearings']);
        DB::table('categories')->insert(['name'=>'Trucks']);
        DB::table('categories')->insert(['name'=>'Decks']);
        DB::table('categories')->insert(['name'=>'Griptape']);
        DB::table('categories')->insert(['name'=>'Tools & accessory']);
    }
}
