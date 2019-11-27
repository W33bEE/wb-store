<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sizes')->insert(['name'=>'Decks:']);
        DB::table('sizes')->insert(['name'=>'7.7']);
        DB::table('sizes')->insert(['name'=>'7.8']);
        DB::table('sizes')->insert(['name'=>'7.9']);
        DB::table('sizes')->insert(['name'=>'8.0']);
        DB::table('sizes')->insert(['name'=>'8.125']);
        DB::table('sizes')->insert(['name'=>'8.25']);
        DB::table('sizes')->insert(['name'=>'8.5']);
        DB::table('sizes')->insert(['name'=>'9.0']);
        DB::table('sizes')->insert(['name'=>'9.5']);
        DB::table('sizes')->insert(['name'=>'Wheels:']);
        DB::table('sizes')->insert(['name'=>'40mm']);
        DB::table('sizes')->insert(['name'=>'45mm']);
        DB::table('sizes')->insert(['name'=>'48mm']);
        DB::table('sizes')->insert(['name'=>'50mm']);
        DB::table('sizes')->insert(['name'=>'52mm']);
        DB::table('sizes')->insert(['name'=>'54mm']);
        DB::table('sizes')->insert(['name'=>'56mm']);
        DB::table('sizes')->insert(['name'=>'58mm']);
        DB::table('sizes')->insert(['name'=>'60mm']);
        DB::table('sizes')->insert(['name'=>'62mm']);
        DB::table('sizes')->insert(['name'=>'64mm']);
        DB::table('sizes')->insert(['name'=>'Trucks:']);
        DB::table('sizes')->insert(['name'=>'7.7']);
        DB::table('sizes')->insert(['name'=>'7.8']);
        DB::table('sizes')->insert(['name'=>'7.9']);
        DB::table('sizes')->insert(['name'=>'8.0']);
        DB::table('sizes')->insert(['name'=>'8.125']);
        DB::table('sizes')->insert(['name'=>'8.25']);
        DB::table('sizes')->insert(['name'=>'8.5']);
        DB::table('sizes')->insert(['name'=>'9.0']);
        DB::table('sizes')->insert(['name'=>'9.5']);
        DB::table('sizes')->insert(['name'=>'Lagers:']);
        DB::table('sizes')->insert(['name'=>'open']);
        DB::table('sizes')->insert(['name'=>'shielded']);
        DB::table('sizes')->insert(['name'=>'Griptape:']);
        DB::table('sizes')->insert(['name'=>'one size']);
        DB::table('sizes')->insert(['name'=>'Tools & Accesoires']);
        DB::table('sizes')->insert(['name'=>'one piece']);
        DB::table('sizes')->insert(['name'=>'Set of eight']);
        DB::table('sizes')->insert(['name'=>'Set of eight + Tool']);

    }

}
