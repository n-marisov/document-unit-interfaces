<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\OktmoFormatterInterface;
use Maris\Interfaces\Document\Model\OktmoInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с БИК.
 */
interface OktmoUtilityInterface extends UnitUtilityInterface, OktmoFormatterInterface
{
    /**
     * @inheritDoc
     * @return OktmoInterface|null
     */
    public function create(Stringable|string $number): ?OktmoInterface;
}