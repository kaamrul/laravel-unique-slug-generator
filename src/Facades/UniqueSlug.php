<?php

namespace Kaamrul\UniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @see \Kaamrul\UniqueSlug\UniqueSlug
 */
class UniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-unique-slug';
    } 
}