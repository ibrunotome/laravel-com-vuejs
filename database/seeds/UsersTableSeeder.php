<?php

use Financial\User;
use Illuminate\Database\Seeder;

/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->states(['admin'])->create([
            'name' => 'Bruno Tomé',
            'email' => 'ibrunotome@gmail.com'
        ]);
    }
}
