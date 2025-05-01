<?php

namespace Vahram1995\NovaMultipleRadio;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::script('nova-multiple-radio', __DIR__ . '/../dist/js/field.js');
        Nova::style('nova-multiple-radio', __DIR__ . '/../dist/css/field.css');
    }

    public function register()
    {
        //
    }
}
