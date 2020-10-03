<?php

namespace Tests\Unit;

use Ammwrap\Auth\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    /**
     * Test can instantiate class
     *
     * @return void
     */
    public function test_can_instantiate_class()
    {
        $auth = new Auth();
        $this->assertInstanceOf('\Ammwrap\Auth\Auth', $auth);
    }
}