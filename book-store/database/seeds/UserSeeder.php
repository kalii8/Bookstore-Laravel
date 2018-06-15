<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->fill([
            'name' =>'Liva',
            'email' => 'test@me.com',
            'password' => bcrypt('secret')
        ]);

        $user->save();
    }
}
