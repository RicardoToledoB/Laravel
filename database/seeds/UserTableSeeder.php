<?php

use Illuminate\Database\Seeder;
use EloquentOrm\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'=>'Ricardo',
            
        ]);
        factory(User::class,99)->create();
    }
}
