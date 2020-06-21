<?php

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jxclsv\LaravelPackageKickstarter\Kickstarter
 */
class KickstarterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'kickstarter';
    }
}
