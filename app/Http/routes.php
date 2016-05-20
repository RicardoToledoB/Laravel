<?php

Route::get("/home",[
   'as'=>'home',
   'uses'=> 'PageController@home'
]);


Route::get("/all",[
   'as'=>'all',
   'uses'=> 'QueryController@eloquentAll'
]);

Route::get("/get/{gender}",[
   'as'=>'get',
   'uses'=> 'QueryController@eloquentGet'
]);