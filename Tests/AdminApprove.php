<?php

use PHPUnit\Framework\TestCase;

class EmployeLoginTest extends TestCase {

    public function EmployeLogin(): void
    {
        $insertApprove=[
            'id'=>'101',
            'token'=>'301'
        ];
        $this->call('GET','approve', $insertApprove);
        $this->assertResponseOk();
    }
}