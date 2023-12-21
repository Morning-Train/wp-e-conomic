<?php

namespace MorningTrain\WpEconomic;

use MorningTrain\Economic\Services\EconomicApiService;
use MorningTrain\Economic\Services\EconomicLoggerService;
use MorningTrain\WpEconomic\Drivers\WordPressEconomicDriver;
use Psr\Log\LoggerInterface;

class Economic
{
    public static function setup(string $appSecretToken, string $agreementGrantToken)
    {
        EconomicApiService::setDriver(new WordPressEconomicDriver($appSecretToken, $agreementGrantToken));
    }

    public static function useLogger(LoggerInterface $logger)
    {
        EconomicLoggerService::registerLogger($logger);
    }
}
