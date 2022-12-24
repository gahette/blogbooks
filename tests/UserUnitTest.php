<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function getEntity(): User
    {
        return (new User())->setEmail('true@test.com')
            ->setPassword('password');
    }

    public function testIsTrue(): void
    {
        $user = $this->getEntity();

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPassword() === 'password');
    }

    public function testIsFalse(): void
    {
        $user = $this->getEntity();

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPassword() === 'false');
    }

    public function testIsEmpty(): void
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
    }
}
