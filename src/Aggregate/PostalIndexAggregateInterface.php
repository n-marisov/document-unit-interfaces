<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\BikInterface;
use Maris\Interfaces\Document\Unit\PostalIndexInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать почтовый индекс
 * на основе собственных данных.
 */
interface PostalIndexAggregateInterface
{
    /***
     * Возвращает/генерирует почтовый индекс.
     * Может быть NULL.
     * @return BikInterface|null
     */
    public function getPostalIndex():?PostalIndexInterface;
}