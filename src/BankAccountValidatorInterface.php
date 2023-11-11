<?php

namespace Maris\Interfaces\Document;

use Maris\Interfaces\Document\AggregateNotNull\BikAggregateNotNullInterface;
use Maris\Interfaces\Document\Model\BikInterface;
use Stringable;

/**
 * Валидатор для проверки банковских счетов.
 */
interface BankAccountValidatorInterface
{
    /***
     * Проверяет валидность банковского счета.
     * Строка должна быть форматированная как в документе или без разделителей.
     * @param string|Stringable $number
     * @param BikInterface|BikAggregateNotNullInterface $bik
     * @return bool
     */
    public function valid(string|Stringable $number, BikInterface|BikAggregateNotNullInterface $bik ):bool;
}