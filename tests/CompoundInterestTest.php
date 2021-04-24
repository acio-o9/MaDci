<?php
/**
 * This file is part of the Koriym.MaDci package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\MaDci;

use Koriym\DciExample\Data\Account;
use Koriym\DciExample\UseCase\CompoundInterestContext;
use PHPUnit\Framework\TestCase;

class CompoundInterestTest extends TestCase
{
    public function testExample()
    {
        $sourceAccount = new Account(20);
        $compoundInterest = new CompoundInterestContext($sourceAccount);
        /* @var $compoundInterest CompoundInterestContext */
        $compoundInterest(5);
        $this->assertSame(21, $sourceAccount->getBalance());
    }
}
