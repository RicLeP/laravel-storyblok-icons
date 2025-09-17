<?php

use Riclep\LaravelStoryblokIcons\Http\Controllers\LaravelStoryblokIconsController;

Route::get('laravel-storyblok-icons', [LaravelStoryblokIconsController::class, 'show'])->name('lsb-icon');
Route::get('laravel-storyblok-icons.json', [LaravelStoryblokIconsController::class, 'json']);
