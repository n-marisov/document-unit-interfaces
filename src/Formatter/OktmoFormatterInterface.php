<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\BikAggregateInterface;
use Maris\Interfaces\Document\Aggregate\OktmoAggregateInterface;
use Maris\Interfaces\Document\Model\BikInterface;
use Maris\Interfaces\Document\Model\OktmoInterface;

/***
 * Интерфейс для форматирования объекта ОКТМО как в документе.
 */
interface OktmoFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param OktmoInterface|OktmoAggregateInterface $oktmo
     * @return string
     */
    public function format( OktmoInterface|OktmoAggregateInterface $oktmo ):string;
}