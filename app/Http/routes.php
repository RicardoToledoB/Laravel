<?php
use EloquentOrm\User;
Route::get('/crear', function () {
    $user=User::create([
        'name'=>'Ricardo',
        'email'=>'l@gmail.com',
        'password'=> bcrypt('1234'),
        'gender'=>'m',
        'biography'=>'Doctor',
        
    ]);
    
    return "Usuario Creado!";
});

Route::get('/update', function () {
    $user=User::find(1);
    $user->name='algo';
    $user->save();
    return "Usuario Actualizado!";
});