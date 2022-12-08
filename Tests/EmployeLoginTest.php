<?php

use PHPUnit\Framework\TestCase;

class EmployeLoginTest extends TestCase {

    public function EmployeLogin(): void
    {
        $credentials=[
            'email'=>'mushfiq@office.com',
            'password'=>'admin'
        ];
        $this->call('POST','login', $credentials);
        $this->assertResponseOk();
    }
}