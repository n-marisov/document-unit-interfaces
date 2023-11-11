<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\AggregateNotNull\BikAggregateNotNullInterface;
use Maris\Interfaces\Document\BankAccountUtilityInterface;
use Maris\Interfaces\Document\Formatter\CorrespondentAccountBankFormatterInterface;
use Maris\Interfaces\Document\Formatter\PaymentAccountBankFormatterInterface;
use Maris\Interfaces\Document\Model\BikInterface;
use Maris\Interfaces\Document\Model\CorrespondentAccountBankInterface;
use Maris\Interfaces\Document\Model\PaymentAccountBankInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с Расчетным счетом банка.
 */
interface PaymentAccountBankUtilityInterface extends BankAccountUtilityInterface, PaymentAccountBankFormatterInterface
{
    /**
     * @inheritDoc
     * @return BikInterface|null
     */
    public function create( Stringable|string $number, BikInterface|BikAggregateNotNullInterface $bik ): ?PaymentAccountBankInterface;
}