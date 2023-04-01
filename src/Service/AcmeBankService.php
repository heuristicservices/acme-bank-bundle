<?php

namespace BankingApp\AcmeBankBundle\Service;


use BankingApp\AppApi\Bank\Bank;

class AcmeBankService implements Bank
{
    public function deposit(int $amount): string
    {
        return sprintf("Deposited %d into AcmeBank", $amount);
    }

    public function getName(): string
    {
        return "acme_bank";
    }
}