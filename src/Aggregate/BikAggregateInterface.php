<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\BikInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать БИК
 * на основе собственных данных.
 */
interface BikAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * Может быть NULL.
     * @return BikInterface|null
     */
    public function getBik():?BikInterface;
}