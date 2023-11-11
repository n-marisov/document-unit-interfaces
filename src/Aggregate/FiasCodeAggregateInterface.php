<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\FiasCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ФИАС код
 * на основе собственных данных.
 */
interface FiasCodeAggregateInterface
{
    /***
     * Возвращает/генерирует ФИАС код.
     * Может быть NULL.
     * @return FiasCodeInterface|null
     */
    public function getFiasCode():?FiasCodeInterface;
}