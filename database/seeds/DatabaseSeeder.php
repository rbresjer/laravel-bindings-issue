<?php

use Illuminate\Database\Seeder;
use App\Models\TestChild;
use App\Models\TestParent;

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
        factory(App\TestParent::class, 10)
            ->create()
            ->each(function ($parent) {
                $parent->testChildren()->save(factory(App\TestChild::class)->make());
            });
    }
}
