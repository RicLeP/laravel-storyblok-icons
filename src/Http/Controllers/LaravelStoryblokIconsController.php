<?php

namespace Riclep\LaravelStoryblokIcons\Http\Controllers;;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Riclep\LaravelStoryblokIcons\SvgIcon;

class LaravelStoryblokIconsController extends \App\Http\Controllers\Controller
{
    protected SvgIcon $svgIconService;

    /**
     * Constructor with dependency injection
     *
     * @param SvgIcon $svgIconService
     */
    public function __construct(SvgIcon $svgIconService)
    {
        $this->svgIconService = $svgIconService;
    }

    /**
     * Display SVG sprites
     *
     * @return Response
     */
    public function show(): Response
    {
        $sprites = $this->svgIconService->getAllIcons();

        return response()
            ->view('laravel-storyblok-icons::icons', ['sprites' => $sprites])
            ->header('Content-Type', 'image/svg+xml')
            ->header('Access-Control-Allow-Origin', 'https://plugin-sandbox.storyblok.com');
    }

    /**
     * Return JSON data of all sprites
     *
     * @return JsonResponse
     */
    public function json(): JsonResponse
    {
        $sprites = $this->svgIconService->getAllIcons();

        return response()
            ->json($sprites)
            ->header('Access-Control-Allow-Origin', '*');
    }
}
