<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = ['products', 'categories', 'brands', 'sizes'];

    public function run()
    {

        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        foreach ($this->toTruncate as $table) {
            /* DB::table('Users')->truncate();*/
            DB::table('Categories')->truncate();
            DB::table('Brands')->truncate();
            DB::table('Sizes')->truncate();

        }
        /*$this->call(UsersTableSeeder::class);*/
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
    }
}
