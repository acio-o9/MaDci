<?php
/**
 * This file is part of the Koriym.MaDci package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Koriym\DciExample;

use Koriym\DciExample\Data\Account;
use Koriym\DciExample\UseCase\CompoundInterestContext;

require dirname(__DIR__) . '/vendor/autoload.php';

$sourceAccount = new Account(200);
$compundInterest = new CompoundInterestContext($sourceAccount);
$compundInterest(10);
var_dump($sourceAccount->getBalance());
