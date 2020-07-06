<?php

declare(strict_types=1);

namespace Sylius\PayPalPlugin\Exception;

class PayPalPluginException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Could not load data from PayPal');
    }
}
