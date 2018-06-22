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
    	
    	DB::table('user_roles')->insert([

    		'name' => 'Admin',

    		'status' => 1,

    	]);

    	DB::table('user_roles')->insert([

    		'name' => 'Vendor',

    		'status' => 1,

    	]);

        factory(App\User::class, 5)->create();        

        factory(App\Product::class, 50)->create();

        factory(App\Ingredient::class, 50)->create();

        factory(App\ManufacturingOrder::class, 50)->create();

        factory(App\PendingOrder::class, 50)->create();

    	factory(App\Inventory::class, 50)->create();
    }
}
