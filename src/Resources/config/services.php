<?php
declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BankingApp\AcmeBankBundle\Service\AcmeBankService;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(AcmeBankService::class)
        ->public()
        ->autowire(true)
        ->autoconfigure(true)
        ->tag('banking_app.bank', []);
};