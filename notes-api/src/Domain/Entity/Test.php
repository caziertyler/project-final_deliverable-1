<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/12/15
 * Time: 7:47 PM
 */

use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\StringLiteral;

$tester = new StringLiteral();

$test = new User(new StringLiteral("test"), new StringLiteral("tester"), new StringLiteral("email"));
echo($test);