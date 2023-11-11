<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\PassportSeriesNumberFormatterInterface;
use Maris\Interfaces\Document\Unit\PassportSeriesNumberInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с серией и номером паспорта.
 */
interface PassportSeriesNumberUtilityInterface extends UnitUtilityInterface, PassportSeriesNumberFormatterInterface
{
    /**
     * @inheritDoc
     * @return PassportSeriesNumberInterface|null
     */
    public function create(Stringable|string $number): ?PassportSeriesNumberInterface;
}