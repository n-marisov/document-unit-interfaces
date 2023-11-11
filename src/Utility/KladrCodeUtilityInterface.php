<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\KladrCodeFormatterInterface;
use Maris\Interfaces\Document\Unit\KladrCodeInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с БИК.
 */
interface KladrCodeUtilityInterface extends UnitUtilityInterface, KladrCodeFormatterInterface
{
    /**
     * @inheritDoc
     * @return KladrCodeInterface|null
     */
    public function create(Stringable|string $number): ?KladrCodeInterface;
}