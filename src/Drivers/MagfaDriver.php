<?php

declare(strict_types=1);

namespace Misaf\LaravelSmsGatewayMagfa\Drivers;

use Illuminate\Http\Client\PendingRequest;
use Misaf\LaravelSmsGateway\SmsGatewayDriver;

final class MagfaDriver extends SmsGatewayDriver
{
    protected function driverName(): string
    {
        return 'magfa';
    }

    protected function defaultGateway(): string
    {
        return 'https://sms.magfa.com/api/http/sms/v2/';
    }

    protected function configureRequest(PendingRequest $request): PendingRequest
    {
        return $request
            ->withBasicAuth($this->serviceConfigString('username'), $this->serviceConfigString('password'))
            ->acceptJson()
            ->asJson();
    }
}
