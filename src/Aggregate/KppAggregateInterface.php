<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\KppInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать КПП
 * на основе собственных данных.
 */
interface KppAggregateInterface
{
    /***
     * Возвращает/генерирует КПП.
     * Может быть NULL.
     * @return KppInterface|null
     */
    public function getKpp():?KppInterface;
}