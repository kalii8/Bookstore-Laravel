<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; ++$i)
 
    App\Book::create([
        'title' => 'Title' . $i,
        'year'  => 2018
    ]);
    }
}
