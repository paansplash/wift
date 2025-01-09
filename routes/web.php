<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // Name the route "welcome"

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us'); // Name the route "about-us"

Route::get('/projects', function () {
    return view('projects');
})->name('projects'); // Name the route "projects"

Route::get('/services', function () {
    return view('services');
})->name('services'); // Name the route "services"

Route::get('/services-detail', function () {
    return view('services-detail');
})->name('services-detail'); // Name the route "services-detail"

Route::get('/blog', function () {
    return view('blog');
})->name('blog'); // Name the route "blog"

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); // Name the route "contact"
