<?php

namespace Riclep\LaravelStoryblokIcons;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SvgIcon
{
    /**
     * Get all SVG icons from the resources/img/icons directory
     *
     * @return Collection
     */
    public function getAllIcons(): Collection
    {
        $iconPath = config('laravel-storyblok-icons.path');
        $svgFiles = File::glob("{$iconPath}/*.svg");

        return collect($svgFiles)->map(function ($file) {
            $id = Str::of(basename($file))->beforeLast('.svg')->toString();

            return [
                'id' => $id,
                'svg' => File::get($file),
                'filename' => basename($file),
            ];
        });
    }

    /**
     * Get a specific SVG icon by filename
     *
     * @param string $filename
     * @return array|null
     */
    public function getIcon(string $filename): ?array
    {
        $iconPath = config('laravel-storyblok-icons.path/' . $filename);

        if (!File::exists($iconPath)) {
            return null;
        }

        $id = Str::of(basename($iconPath))->beforeLast('.svg')->toString();

        return [
            'id' => $id,
            'svg' => File::get($iconPath),
            'filename' => basename($iconPath),
        ];
    }

    /**
     * Get the URL to an SVG icon for use in Blade templates
     *
     * @param string $iconName The icon name without .svg extension
     * @return string The URL to the icon
     */
    public static function iconUrl(string $iconName): string
    {
        return route('lsb-icon') . '#' . $iconName;
    }
}
