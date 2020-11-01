<?php

use Illuminate\Database\Seeder;
use App\Bookable;

class BookableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bookable::class,1000)->create();
    }
}
