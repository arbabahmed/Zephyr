<?php

use Illuminate\Database\Seeder;

class MOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\ManufacturingOrder::class, 50)->create();
    }
}
