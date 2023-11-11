<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\OkvedCodeAggregateInterface;
use Maris\Interfaces\Document\Unit\OkvedCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ОКВЕД код
 * на основе собственных данных.
 */
interface OkvedCodeAggregateNotNullInterface extends OkvedCodeAggregateInterface
{
    /***
     * Возвращает/генерирует ОКВЕД код.
     * НЕ может быть NULL.
     * @return OkvedCodeInterface
     */
    public function getOkvedNumber(): OkvedCodeInterface;
}