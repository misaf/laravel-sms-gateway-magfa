<?php

declare(strict_types=1);

namespace Misaf\LaravelSmsGatewayMagfa;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Misaf\LaravelSmsGateway\SmsGatewayManager;
use Misaf\LaravelSmsGatewayMagfa\Drivers\MagfaDriver;

final class MagfaSmsGatewayServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(SmsGatewayManager::class, function (SmsGatewayManager $manager): void {
            $manager->extend('magfa', fn(Application $app): MagfaDriver => $app->make(MagfaDriver::class));
        });
    }
}
