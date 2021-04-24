<?php
/**
 * This file is part of the Koriym.MaDci package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\DciExample\UseCase;

use Koriym\DciExample\Data\Account;
use Koriym\DciExample\UseCase\CompoundInterest\Role\SourceAccountRole;
use Koriym\MaDci\AbstractContext;
use Koriym\MaDci\RoleInjector;

final class CompoundInterestContext extends AbstractContext
{
    /**
     * @var SourceAccountRole
     */
    public $sourceAccount;

    public function __construct(Account $sourceAccount)
    {
        $roleInjector = new RoleInjector($this);
        $this->sourceAccount = $roleInjector->inject($sourceAccount, [SourceAccountRole::class]);
    }

    public function __invoke(int $rate)
    {
        $this->sourceAccount->increase($rate);
    }
}
