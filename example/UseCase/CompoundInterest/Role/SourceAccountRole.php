<?php
/**
 * This file is part of the Koriym.MaDci package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\DciExample\UseCase\CompoundInterest\Role;

use Koriym\DciExample\Data\Account;
use Koriym\DciExample\UseCase\CompoundInterestContext;
use Koriym\MaDci\AbstractRole;

final class SourceAccountRole extends AbstractRole
{
    /**
     * @var CompoundInterestContext
     */
    protected $context;

    public function increase(int $rate)
    {
        $amount = ($this->getBalance() * $rate / 100);
        /* @var Account $this */
        $this->increaseBalance($amount);
    }
}
