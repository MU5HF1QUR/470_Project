<?php

use PHPUnit\Framework\TestCase;

class AdminCancelApproveLeave extends TestCase {

    public function AdminCancelApproveLeave(): void
    {
        $insertCancelLeave=[
            'id'=>'101',
            'token'=>'301'
        ];
        $this->call('GET','cancel', $insertCancelLeave);
        $this->assertResponseOk();
    }
}