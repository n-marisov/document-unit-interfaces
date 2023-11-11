<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\IsoCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ISO-код
 * на основе собственных данных.
 */
interface IsoCodeAggregateInterface
{
    /***
     * Возвращает/генерирует ISO-код.
     * Может быть NULL.
     * @return IsoCodeInterface|null
     */
    public function getIsoCode():?IsoCodeInterface;
}