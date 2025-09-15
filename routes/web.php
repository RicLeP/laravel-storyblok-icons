<?php

use Riclep\LaravelStoryblokIcons\Http\Controllers\LaravelStoryblokIconsController;

Route::get('laravel-storyblok-icons', [LaravelStoryblokIconsController::class, 'show'])->name('ls-icon');
Route::get('laravel-storyblok-icons.json', [LaravelStoryblokIconsController::class, 'json']);
