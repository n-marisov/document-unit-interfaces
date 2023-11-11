<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\IsoCodeFormatterInterface;
use Maris\Interfaces\Document\Unit\IsoCodeInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с ISO-код.
 */
interface IsoCodeUtilityInterface extends UnitUtilityInterface, IsoCodeFormatterInterface
{
    /**
     * @inheritDoc
     * @return IsoCodeInterface|null
     */
    public function create(Stringable|string $number): ?IsoCodeInterface;
}