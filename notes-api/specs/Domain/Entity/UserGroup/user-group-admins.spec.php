<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/3/15
 * Time: 7:20 PM
 */

use Notes\Domain\Entity\UserGroup\Admins;

describe('Notes\Domain\Entity\UserGroup\Admins', function () {
    describe('-->__construct()', function () {
        it('should construct a new User object', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $admins = new User($groupName);

            expect($admins)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Admins');
        });
    });
    describe('-->__toString()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $admins = new Admins($groupName);

            expect($admins->__toString())->equal($groupName);
        });
    });
    describe('-->getName()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $admins = new Admins($groupName);

            expect($admins->getName())->equal($groupName);
        });
    });
    describe('-->addUser()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $user = new User (StringLiteral($faker->firstName),StringLiteral($faker->lastName),StringLiteral($faker->email));
            $admins = new Admins($groupName);
            $admins->addUser($user);

            expect($admins->getUsers()[0])->equal($user);
        });
    });
    describe('-->getUsers()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $admins = new User($groupName);
            $users[] = new User();

            for ($i=0;$i<10;$i++){
                $user = new User (StringLiteral($faker->firstName),StringLiteral($faker->lastName),StringLiteral($faker->email));
                $users[i]=$user;
                $admins->addUser($user);
            }

            expect($admins->getUsers())->equal($users[i]);
        });
    });
});