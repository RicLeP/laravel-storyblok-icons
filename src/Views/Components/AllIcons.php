<?php

namespace Riclep\LaravelStoryblokIcons\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Riclep\LaravelStoryblokIcons\SvgIcon;

class AllIcons extends Component
{

    public function __construct(SvgIcon $svgIconService)
    {
        $this->svgIconService = $svgIconService;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $sprites = $this->svgIconService->getAllIcons();

        return view('laravel-storyblok-icons::icons', ['sprites' => $sprites]);
    }
}
