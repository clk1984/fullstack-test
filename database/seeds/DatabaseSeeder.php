<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     // factory(App\User::class, rand(0, 20))->create();
      factory(App\Mission::class, rand(0, 20))->create();
    }
}
