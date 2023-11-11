<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\SnilsNumberAggregateInterface;
use Maris\Interfaces\Document\Unit\SnilsNumberInterface;

/***
 * Интерфейс для форматирования объекта номер СНИЛС как в документе.
 */
interface SnilsNumberFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param SnilsNumberInterface|SnilsNumberAggregateInterface $snilsNumber
     * @return string
     */
    public function format( SnilsNumberInterface|SnilsNumberAggregateInterface $snilsNumber ):string;
}