<?php

use PHPUnit\Framework\TestCase;

class AdminApprove extends TestCase {

    public function AdminApprove(): void
    {
        $insertApprove=[
            'id'=>'101',
            'token'=>'301'
        ];
        $this->call('GET','approve', $insertApprove);
        $this->assertResponseOk();
    }
}