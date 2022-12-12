<?php

use PHPUnit\Framework\TestCase;

class AdminApproveTest extends TestCase {

    public function AdminApproveTest(): void
    {
        $insertApprove=[
            'id'=>'101',
            'token'=>'301'
        ];
        $this->call('GET','approve', $insertApprove);
        $this->assertResponseOk();
    }
}