<?php
/**
 * Created by PhpStorm.
 * User: tylercazier
 * Date: 11/3/15
 * Time: 7:12 PM
 */

use Notes\Domain\Entity\User;
use Notes\Domain\ValueObject\StringLiteral;

describe('Notes\Domain\Entity\User', function () {
    describe('-->__construct()', function () {
        it('should construct a new User object', function () {
            $faker = \Faker\Factory::create();
            $firstName = new StringLiteral($faker->firstName);
            $lastName = new StringLiteral($faker->lastName);
            $email = new StringLiteral($faker->email);
            $user = new User($firstName, $lastName, $email);

            expect($user)->to->be->instanceof('Notes\Domain\Entity\User');
        });
    });
    describe('-->__toString()', function () {
        it('should return string "firstname lastname"', function () {
            $faker = \Faker\Factory::create();
            $firstName = new StringLiteral($faker->firstName);
            $lastName = new StringLiteral($faker->lastName);
            $email = new StringLiteral($faker->email);
            $user = new User($firstName, $lastName, $email);

            expect(is_string($user->__toString()));
        });
    });
    describe('-->getFirstName()', function () {
        it('should return the user\'s firstname', function () {
            $faker = \Faker\Factory::create();
            $firstName = new StringLiteral($faker->firstName);
            $lastName = new StringLiteral($faker->lastName);
            $email = new StringLiteral($faker->email);
            $user = new User($firstName, $lastName, $email);

            expect($user->getFirstName())->equal($firstName);
        });
    });
    describe('-->getLastName()', function () {
        it('should return the user\'s lastname', function () {
            $faker = \Faker\Factory::create();
            $firstName = new StringLiteral($faker->firstName);
            $lastName = new StringLiteral($faker->lastName);
            $email = new StringLiteral($faker->email);
            $user = new User($firstName, $lastName, $email);

            expect($user->getLastName())->equal($lastName);
        });
    });
    describe('-->getEmail()', function () {
        it('should return the user\'s email address', function () {
            $faker = \Faker\Factory::create();
            $firstName = new StringLiteral($faker->firstName);
            $lastName = new StringLiteral($faker->lastName);
            $email = new StringLiteral($faker->email);
            $user = new User($firstName, $lastName, $email);

            expect($user->getEmail())->equal($email);
        });
    });
    describe('-->setFirstName()', function () {
        it('should change the userFirstName to the given value.', function () {
            $faker = \Faker\Factory::create();
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $email = $faker->email;
            $user = new User($firstName, $lastName, $email);

            $testFirstName = $faker->firstName;

            $user->setFirstName($testFirstName);

            expect($user->getFirstName())->equal($testFirstName);
        });
    });
    describe('-->setLastName()', function () {
        it('should change the userLastName to the given value.', function () {
            $faker = \Faker\Factory::create();
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $email = $faker->email;
            $user = new User($firstName, $lastName, $email);

            $testLastName = $faker->lastName;

            $user->setLastName($testLastName);

            expect($user->getLastName())->equal($testLastName);
        });
    });
});