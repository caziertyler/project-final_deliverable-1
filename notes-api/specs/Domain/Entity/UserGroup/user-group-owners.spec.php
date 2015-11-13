<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/3/15
 * Time: 7:21 PM
 */

describe('Notes\Domain\Entity\UserGroup\Owners', function () {
    describe('-->__construct()', function () {
        it('should construct a new User object', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $owners = new User($groupName);

            expect($owners)->to->be->instanceof('Notes\Domain\Entity\UserGroup\Admins');
        });
    });
    describe('-->__toString()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $owners = new Admins($groupName);

            expect($owners->__toString())->equal($groupName);
        });
    });
    describe('-->getName()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $owners = new Admins($groupName);

            expect($owners->getName())->equal($groupName);
        });
    });
    describe('-->addUser()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $user = new User (StringLiteral($faker->firstName),StringLiteral($faker->lastName),StringLiteral($faker->email));
            $owners = new Admins($groupName);
            $owners->addUser($user);

            expect($owners->getUsers()[0])->equal($user);
        });
    });
    describe('-->getUsers()', function () {
        it('should return "test user"', function () {
            $faker = \Faker\Factory::create();
            $groupName = new StringLiteral($faker->name);
            $owners = new User($groupName);
            $users[] = new User();

            for ($i=0;$i<10;$i++){
                $user = new User (StringLiteral($faker->firstName),StringLiteral($faker->lastName),StringLiteral($faker->email));
                $users[i]=$user;
                $owners->addUser($user);
            }

            expect($owners->getUsers())->equal($users[i]);
        });
    });
});