<?php

namespace NordCoders\LaravelServiceMaker;

use NordCoders\LaravelServiceMaker\Commands\Files\CreateServiceContractCommand;
use NordCoders\LaravelServiceMaker\Commands\Files\CreateServiceFileCommand;
use NordCoders\LaravelServiceMaker\Commands\LaravelServiceMakerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelServiceMakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-service-maker')
            ->hasConfigFile('service-maker')
            ->hasCommand(LaravelServiceMakerCommand::class)
            ->hasCommand(CreateServiceFileCommand::class)
            ->hasCommand(CreateServiceContractCommand::class);
    }
}
