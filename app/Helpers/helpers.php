<?php
use Illuminate\Support\Facades\Route;

if (!function_exists('pageTitle')) {
	function pageTitle(string $title): string
	{
		return $title ?? config('app.name');
	}
}

if (!function_exists('fullPageTitle')) {
	function fullPageTitle(string $title, string $name): string
	{
		return pageTitle($title) . " | {$name} | " . config('app.name');
	}
}

if (!function_exists('stylesheets')) {
	function stylesheets(array $filenames): string
	{
		$output = '';

		foreach ($filenames as $filename) {
			$output .= '<link href="' . url("/public/{$filename}.css") .'" rel="stylesheet" />'."\n";
		}

		return $output;
	}
}

if (!function_exists('javascripts')) {
	function javascripts(array $filenames): string
	{
		$output = '';

		foreach ($filenames as $filename) {
			$output .= '<script src="'. url("/public/{$filename}.js") .'" defer></script>'."\n";
		}

		return $output;
	}
}