<?php

namespace IbrahimBougaoua\FilaProgress;

use IbrahimBougaoua\FilaProgress\Commands\FilaProgressCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
