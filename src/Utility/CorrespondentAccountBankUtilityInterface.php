<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\AggregateNotNull\BikAggregateNotNullInterface;
use Maris\Interfaces\Document\BankAccountUtilityInterface;
use Maris\Interfaces\Document\Formatter\CorrespondentAccountBankFormatterInterface;
use Maris\Interfaces\Document\Model\BikInterface;
use Maris\Interfaces\Document\Model\CorrespondentAccountBankInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с Корреспондентским счетом банка.
 */
interface CorrespondentAccountBankUtilityInterface extends BankAccountUtilityInterface, CorrespondentAccountBankFormatterInterface
{
    /**
     * @inheritDoc
     * @return BikInterface|null
     */
    public function create( Stringable|string $number, BikInterface|BikAggregateNotNullInterface $bik ): ?CorrespondentAccountBankInterface;
}