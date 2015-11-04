<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{

    use DatabaseTransactions;

    public function testLoginPageDidLoad()
    {
        $response = $this->call('GET', '/auth/login');
        $this->assertEquals(200, $response->status());
    }

    public function testIsLoginPage()
    {
        $this->visit('/auth/login')
             ->see('Login');
    }
}
