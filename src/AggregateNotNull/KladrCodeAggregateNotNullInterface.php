<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\KladrCodeAggregateInterface;
use Maris\Interfaces\Document\Model\KladrCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать КЛАДР код
 * на основе собственных данных.
 */
interface KladrCodeAggregateNotNullInterface extends KladrCodeAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * НЕ может быть NULL.
     * @return KladrCodeInterface
     */
    public function getKladrDode(): KladrCodeInterface;
}