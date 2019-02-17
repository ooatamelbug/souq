<?php

use Illuminate\Database\Seeder;

class DealingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Dealing::class, 15)->create();
        //
    }
}
