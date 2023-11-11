<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\IsoCodeAggregateInterface;
use Maris\Interfaces\Document\Model\IsoCodeInterface;

/***
 * Интерфейс для форматирования объекта ISO-код как в документе.
 */
interface IsoCodeFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param IsoCodeInterface|IsoCodeAggregateInterface $isoCode
     * @return string
     */
    public function format( IsoCodeInterface|IsoCodeAggregateInterface $isoCode ):string;
}