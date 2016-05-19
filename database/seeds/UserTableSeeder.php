<?php

use Illuminate\Database\Seeder;
use EloquentOrm\User;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'name'=>'Ricardo',
        ]);
        factory(User::class,99)->create();
    }
}
