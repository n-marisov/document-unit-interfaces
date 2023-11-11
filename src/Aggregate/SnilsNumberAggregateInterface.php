<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\BikInterface;
use Maris\Interfaces\Document\Unit\SnilsNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать БИК
 * на основе собственных данных.
 */
interface SnilsNumberAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * Может быть NULL.
     * @return BikInterface|null
     */
    public function getSnilsNumber():?SnilsNumberInterface;
}