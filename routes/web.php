<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Panelis\Page\Http\Controllers\SitemapController;

Route::view('/about', 'page::static.about')->name('about');
Route::view('/terms', 'page::static.terms')->name('terms');
Route::view('/content-policy', 'page::static.content-policy')->name('content-policy');
Route::view('/privacy-policy', 'page::static.privacy-policy')->name('privacy-policy');

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
