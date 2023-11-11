<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\BikAggregateInterface;
use Maris\Interfaces\Document\Unit\BikInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать БИК
 * на основе собственных данных.
 */
interface BikAggregateNotNullInterface extends BikAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * НЕ может быть NULL.
     * @return BikInterface
     */
    public function getBik(): BikInterface;
}