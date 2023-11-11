<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\KppAggregateInterface;
use Maris\Interfaces\Document\Unit\KppInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать БИК
 * на основе собственных данных.
 */
interface KppAggregateNotNullInterface extends KppAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * НЕ может быть NULL.
     * @return KppInterface
     */
    public function getKpp(): KppInterface;
}