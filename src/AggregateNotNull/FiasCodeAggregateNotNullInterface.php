<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\FiasCodeAggregateInterface;
use Maris\Interfaces\Document\Model\FiasCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ФИАС код
 * на основе собственных данных.
 */
interface FiasCodeAggregateNotNullInterface extends FiasCodeAggregateInterface
{
    /***
     * Возвращает/генерирует ФИАС код.
     * НЕ может быть NULL.
     * @return FiasCodeInterface
     */
    public function getFiasCode(): FiasCodeInterface;
}