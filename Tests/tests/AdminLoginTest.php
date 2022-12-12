<?php

use PHPUnit\Framework\TestCase;

class AdminLoginTest extends TestCase {

    public function AdminLogin(): void
    {
        $credentials=[
            'username'=>'admin',
            'password'=>'admin'
        ];
        $this->call('POST','login', $credentials);
        $this->assertResponseOk();
    }
}