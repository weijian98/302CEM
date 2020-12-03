<?php

namespace tests\unit\models;

use app\models\User;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        expect_that($user = User::findIdentity(6));
        expect($user->username)->equals('demo');

        expect_not(User::findIdentity(999));
    }

    /*public function testFindUserByAccessToken()
    {
        expect_that($user = User::findIdentityByAccessToken('100-token'));
        expect($user->username)->equals('admin');

        expect_not(User::findIdentityByAccessToken('non-existing'));        
    }*/

    public function testFindUserByUsername()
    {
        expect_that($user = User::findByUsername('demo'));
        expect_not(User::findByUsername('not-admin'));
    }

    /**
     * @depends testFindUserByUsername
     */
    public function testValidateUser($user)
    {
        $user = User::findByUsername('demo');
       // expect_that($user->validateAuthKey(''));
       // expect_not($user->validateAuthKey('16'));

       // expect_that($user->validatePassword('demodemo'));
       // expect_not($user->validatePassword('123456'));
    }

}
