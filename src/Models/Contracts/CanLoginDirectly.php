<?php

namespace Emefye\FilamentOtpLogin\Models\Contracts;

interface CanLoginDirectly
{
    public function canLoginDirectly(): bool;
}
