<?php
use Illuminate\Support\Facades\Route;

if (!function_exists('activeMenuItem')) {
	function activeMenuItem(string $routeName): string
	{
		return (Route::currentRouteName() == $routeName) ? 'active' : '';
	}
}

if (!function_exists('activeMenuItemStyle')) {
	function activeMenuItemStyle(string $routeName): string
	{
		return (Route::currentRouteName() == $routeName) ? 'text-primary font-weight-bold' : '';
	}
}

if (!function_exists('pageTitle')) {
	function pageTitle(string $title): string
	{
		return $title ?? config('app.name');
	}
}

if (!function_exists('checkLoader')) {
	function checkLoader(): bool
	{
		return (bool) (in_array(Route::currentRouteName(), ['artists.show', 'partners.show', 'photographers.show']));
	}
}