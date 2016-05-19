<?php
use EloquentOrm\User;
use Faker\Factory as Faker;

Route::get('/create', function () {
    $faker=Faker::create();
    $user=User::create([
        'name'=>$faker->name,
        'email'=>$faker->email,
        'password'=> bcrypt('1234'),
        'gender'=>$faker->randomElement(['f','m']),
        'biography'=>$faker->text(200),
        
    ]);
    
    return $user;
});

Route::get('/update/{id}', function ($id) {
    $faker=Faker::create();
    $user=User::find($id);
    $user->name=$faker->name;
    $user->save();
    return $user;
});

Route::get('/read/{id}',function($id){
   $user=User::find($id);
   return $user;
});

Route::get('/delete/{id}',function($id){
   $user=User::find($id);
   $user->delete();
   return "Usuario Eliminado";
});