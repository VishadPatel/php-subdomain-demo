<?php

use Illuminate\Support\Facades\Route;

/* Create mapping for different domain group to show case.*/


Route::domain("event.".env("APP_URL"))->group(
    function(){

        Route::get('about', function(){
            return view('events.aboutus');
        });

    }
);
