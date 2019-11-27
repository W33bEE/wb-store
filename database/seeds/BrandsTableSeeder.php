<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(['name'=>'Almost']);
        DB::table('brands')->insert(['name'=>'Bones']);
        DB::table('brands')->insert(['name'=>'Birdhouse']);
        DB::table('brands')->insert(['name'=>'Baker']);
        DB::table('brands')->insert(['name'=>'Bones']);
        DB::table('brands')->insert(['name'=>'BronsenSpeedCo']);
        DB::table('brands')->insert(['name'=>'Flip']);
        DB::table('brands')->insert(['name'=>'Huf']);
        DB::table('brands')->insert(['name'=>'Grizzly']);
        DB::table('brands')->insert(['name'=>'Globe']);
        DB::table('brands')->insert(['name'=>'Independent']);
        DB::table('brands')->insert(['name'=>'Mob']);
        DB::table('brands')->insert(['name'=>'Powell']);
        DB::table('brands')->insert(['name'=>'Primitive']);
        DB::table('brands')->insert(['name'=>'Shorty']);
        DB::table('brands')->insert(['name'=>'Spitfire']);
        DB::table('brands')->insert(['name'=>'Shake-a-junt']);
        DB::table('brands')->insert(['name'=>'Thunder']);
        DB::table('brands')->insert(['name'=>'Toy-machine']);
        DB::table('brands')->insert(['name'=>'Trasher']);
        DB::table('brands')->insert(['name'=>'Venture']);
        DB::table('brands')->insert(['name'=>'Zero']);
    }
}
