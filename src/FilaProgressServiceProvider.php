<?php

namespace IbrahimBougaoua\FilaProgress;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IbrahimBougaoua\FilaProgress\Commands\FilaProgressCommand;

class FilaProgressServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filaprogress')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filaprogress_table')
            ->hasCommand(FilaProgressCommand::class);
    }
}