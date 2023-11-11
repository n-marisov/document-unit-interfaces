<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\BikFormatterInterface;
use Maris\Interfaces\Document\Unit\BikInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с БИК.
 */
interface BikUtilityInterface extends UnitUtilityInterface, BikFormatterInterface
{
    /**
     * @inheritDoc
     * @return BikInterface|null
     */
    public function create(Stringable|string $number): ?BikInterface;
}