<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\OkatoAggregateInterface;
use Maris\Interfaces\Document\Model\OkatoInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ОКАТО
 * на основе собственных данных.
 */
interface OkatoAggregateNotNullInterface extends OkatoAggregateInterface
{
    /***
     * Возвращает/генерирует ОКАТО.
     * НЕ может быть NULL.
     * @return OkatoInterface
     */
    public function getOKato(): OkatoInterface;
}