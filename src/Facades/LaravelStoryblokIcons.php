<?php

namespace Riclep\LaravelStoryblokIcons\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelStoryblokIcons extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-storyblok-icons';
    }
}
