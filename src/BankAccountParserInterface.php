<?php

namespace Maris\Interfaces\Document;

use Maris\Interfaces\Document\AggregateNotNull\BikAggregateNotNullInterface;
use Maris\Interfaces\Document\Model\BikInterface;
use Stringable;

/***
 * Парсер для банковских счетов.
 */
interface BankAccountParserInterface
{
    /***
     * Парсит строку и ищет в ней банковские счета.
     * Возвращает лист со всеми найденными номерами объектов.
     * @param string|Stringable $parsed
     * @param BikInterface|BikAggregateNotNullInterface $bik
     * @return iterable<UnitInterface>
     */
    public function parse( string|Stringable $parsed, BikInterface|BikAggregateNotNullInterface $bik ):iterable;
}