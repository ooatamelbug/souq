<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
          productTableSeeder::class,
          UsersTableSeeder::class,
          DepartTableSeeder::class,
          DetailsTableSeeder::class,
          RoutedaelTableSeeder::class,
          PartTableSeeder::class
          //ImagesTableSeeder::class
        ]);
    }
}
