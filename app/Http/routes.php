<?php

Route::get("/home",[
   'as'=>'home',
   'uses'=> 'PageController@home'
]);