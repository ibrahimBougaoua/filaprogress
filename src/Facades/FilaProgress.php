<?php

namespace IbrahimBougaoua\FilaProgress\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IbrahimBougaoua\FilaProgress\FilaProgress
 */
class FilaProgress extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \IbrahimBougaoua\FilaProgress\FilaProgress::class;
    }
}
