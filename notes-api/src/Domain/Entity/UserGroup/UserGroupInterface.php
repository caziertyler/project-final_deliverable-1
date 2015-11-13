<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/3/15
 * Time: 7:23 PM
 */

namespace Notes\Domain\Entity\UserGroup;

use Notes\Domain\Entity\User;

interface UserGroupInterface
{
    /**
     * @return Notes\Domain\ValueObject\Uuid
     */
    public function getId();

    /**
     * @return StringLiteral
     */
    public function getName();

    /**
     * @return array
     */
    public function getUsers();

    /**
     * @return bool
     */
    public function addUser();

    /**
     * @return  bool
     */
    public function removeUser();
}