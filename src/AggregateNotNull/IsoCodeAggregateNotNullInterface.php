<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\IsoCodeAggregateInterface;
use Maris\Interfaces\Document\Unit\IsoCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ISO-код
 * на основе собственных данных.
 */
interface IsoCodeAggregateNotNullInterface extends IsoCodeAggregateInterface
{
    /***
     * Возвращает/генерирует ISO-код.
     * НЕ может быть NULL.
     * @return IsoCodeInterface
     */
    public function getIsoCode(): IsoCodeInterface;
}