<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\OkvedCodeAggregateInterface;
use Maris\Interfaces\Document\Model\OkvedCodeInterface;

/***
 * Интерфейс для форматирования объекта ОКВЕД код как в документе.
 */
interface OkvedCodeFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param OkvedCodeInterface|OkvedCodeAggregateInterface $okvedCode
     * @return string
     */
    public function format( OkvedCodeInterface|OkvedCodeAggregateInterface $okvedCode ):string;
}