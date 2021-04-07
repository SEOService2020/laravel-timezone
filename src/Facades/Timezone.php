<?php

namespace SEOService2020\LaravelTimezone\Facades;

use Illuminate\Support\Facades\Facade;

class Timezone extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'timezone';
    }
}
