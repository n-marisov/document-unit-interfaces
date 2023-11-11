<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\OkvedCodeFormatterInterface;
use Maris\Interfaces\Document\Unit\OkvedCodeInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с ОКВЕД кодом.
 */
interface OkvedCodeUtilityInterface extends UnitUtilityInterface, OkvedCodeFormatterInterface
{
    /**
     * @inheritDoc
     * @return OkvedCodeInterface|null
     */
    public function create(Stringable|string $number): ?OkvedCodeInterface;
}