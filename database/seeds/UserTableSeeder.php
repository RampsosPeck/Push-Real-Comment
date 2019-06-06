<?php

use Illuminate\Database\Seeder;
use Pushrealcomment\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(User::class,5)->create();
    }
}
