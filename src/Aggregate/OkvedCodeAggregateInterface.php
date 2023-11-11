<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\BikInterface;
use Maris\Interfaces\Document\Unit\OkvedCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать БИК
 * на основе собственных данных.
 */
interface OkvedCodeAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * Может быть NULL.
     * @return BikInterface|null
     */
    public function getOkvedNumber():?OkvedCodeInterface;
}