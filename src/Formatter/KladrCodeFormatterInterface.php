<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\KladrCodeAggregateInterface;
use Maris\Interfaces\Document\Model\KladrCodeInterface;

/***
 * Интерфейс для форматирования объекта КЛАДР как в документе.
 */
interface KladrCodeFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param KladrCodeInterface|KladrCodeAggregateInterface $kladrCode
     * @return string
     */
    public function format( KladrCodeInterface|KladrCodeAggregateInterface $kladrCode ):string;
}