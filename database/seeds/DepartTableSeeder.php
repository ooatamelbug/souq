<?php

use Illuminate\Database\Seeder;

class DepartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Depart::class, 5)->create();
    }
}
