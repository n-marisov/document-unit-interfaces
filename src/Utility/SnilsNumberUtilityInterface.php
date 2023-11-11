<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\SnilsNumberFormatterInterface;
use Maris\Interfaces\Document\Unit\BikInterface;
use Maris\Interfaces\Document\Unit\SnilsNumberInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с номером СНИЛС.
 */
interface SnilsNumberUtilityInterface extends UnitUtilityInterface, SnilsNumberFormatterInterface
{
    /**
     * @inheritDoc
     * @return BikInterface|null
     */
    public function create(Stringable|string $number): ?SnilsNumberInterface;
}