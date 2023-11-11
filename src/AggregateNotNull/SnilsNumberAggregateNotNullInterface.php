<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\SnilsNumberAggregateInterface;
use Maris\Interfaces\Document\Unit\SnilsNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 * номер СНИЛС
 * на основе собственных данных.
 */
interface SnilsNumberAggregateNotNullInterface extends SnilsNumberAggregateInterface
{
    /***
     * Возвращает/генерирует номер СНИЛС.
     * НЕ может быть NULL.
     * @return SnilsNumberInterface
     */
    public function getSnilsNumber(): SnilsNumberInterface;
}