<?php

Route::get("/home",[
   'as'=>'home',
   'uses'=> 'PageController@home'
]);


Route::get("/all",[
   'as'=>'all',
   'uses'=> 'QueryController@getAll'
]);