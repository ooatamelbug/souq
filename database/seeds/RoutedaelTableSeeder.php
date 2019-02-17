<?php

use Illuminate\Database\Seeder;

class RoutedaelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Routdeal::class, 3)->create();
        //
    }
}
