<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\InnNumberFormatterInterface;
use Maris\Interfaces\Document\Model\InnNumberInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с ИНН.
 */
interface InnNumberUtilityInterface extends UnitUtilityInterface, InnNumberFormatterInterface
{
    /**
     * @inheritDoc
     * @return InnNumberInterface|null
     */
    public function create(Stringable|string $number): ?InnNumberInterface;
}