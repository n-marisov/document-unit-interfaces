<?php


namespace Maris\Interfaces\Document;

use Maris\Interfaces\Document\AggregateNotNull\BikAggregateNotNullInterface;
use Maris\Interfaces\Document\Unit\BikInterface;
use Maris\Interfaces\Document\Utility\UnitBankAccountInterface;
use Stringable;

/**
 * Фабрика для создания банковских счетов.
 */
interface BankAccountFactoryInterface
{
    /***
     * Создает новый объект банковского счета.
     * Строка должна быть форматированная как в документе или без разделителей.
     * @param string|Stringable $number
     * @param BikInterface|BikAggregateNotNullInterface $bik
     * @return UnitBankAccountInterface|null
     */
    public function create(string|Stringable $number, BikInterface|BikAggregateNotNullInterface $bik): ?UnitBankAccountInterface;
}