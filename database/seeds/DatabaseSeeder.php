<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = ['products','categories'];
    public function run()
    {

        // $this->call(UsersTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
    foreach ($this->toTruncate as $table){
       // DB::table('Products')->truncate();
        DB::table('Categories')->truncate();
    }
   // $this->call(ProductsTableSeeder::class);
    $this->call(CategoriesTableSeeder::class);
    }
}
