<?php


Route::prefix("Dashbord")->name("Dashbord.")->group(function(){
    Route::get("/check",function(){
        return  view("layouts/dashbord/app");
    });
});