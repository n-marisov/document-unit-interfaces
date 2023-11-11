<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\OktmoAggregateInterface;
use Maris\Interfaces\Document\Unit\OktmoInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ОКТМО
 * на основе собственных данных.
 */
interface OktmoAggregateNotNullInterface extends OktmoAggregateInterface
{
    /***
     * Возвращает/генерирует ОКТМО.
     * НЕ может быть NULL.
     * @return OktmoInterface
     */
    public function getOktmo(): OktmoInterface;
}