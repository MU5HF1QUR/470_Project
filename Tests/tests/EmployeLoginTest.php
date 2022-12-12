<?php

use PHPUnit\Framework\TestCase;

class EmployeLoginTest extends TestCase {

    public function EmployeLogin(): void
    {
        $credentials=[
            'email'=>'mehadi@xyz.corp',
            'password'=>'1234'
        ];
        $this->call('POST','login', $credentials);
        $this->assertResponseOk();
    }
}