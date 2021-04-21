<?php

use App\Model\Category;
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
        $this->call(UserSeeder::class);
        // factory(Category::class, 25)->create();
        factory(Category::class, 10)->create();
    }
}
