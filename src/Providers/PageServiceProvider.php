<?php

declare(strict_types=1);

namespace Panelis\Page\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    private const string NAMESPACE = 'page';

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', self::NAMESPACE);

        $this->loadTranslationsFrom(__DIR__.'/../../lang', self::NAMESPACE);

        Route::middleware('web')
            ->group(__DIR__.'/../../routes/web.php');
    }
}
