<?php

namespace Riclep\LaravelStoryblokIcons\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Riclep\LaravelStoryblokIcons\SvgIcon;

class Icon extends Component
{
    public function __construct(
        public string $id,
        public int $width,
        public ?int $height,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laravel-storyblok-icons::icon');
    }
}
