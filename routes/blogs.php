<?php

use Illuminate\Support\Facades\Route;


Route::domain('blog.'.env('APP_URL'))->group(
    function(){

        Route::get('about', function(){
            return view("blogs.aboutus");
        });
    }
);