<?php

namespace Kkxdev\CollectiveHtmlWrapper;
use Illuminate\Support\ServiceProvider;
use Spatie\Html\Html;


class HtmlBuilderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('html', function ($app) {
            return new HtmlBuilder($app->make(Html::class));
        });

        $this->app->singleton('form', function ($app) {
            return new HtmlBuilder($app->make(Html::class));
        });
    }

    public function boot()
    {

    }
}