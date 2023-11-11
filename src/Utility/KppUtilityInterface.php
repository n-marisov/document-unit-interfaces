<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\KppFormatterInterface;
use Maris\Interfaces\Document\Model\KppInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с КПП.
 */
interface KppUtilityInterface extends UnitUtilityInterface, KppFormatterInterface
{
    /***
     * @inheritDoc
     * @return KppInterface|null
     */
    public function create(Stringable|string $number): ?KppInterface;
}