<?php

use PHPUnit\Framework\TestCase;

class AdminCancelApproveLeaveTest extends TestCase {

    public function AdminCancelApproveLeaveTest(): void
    {
        $insertCancelLeave=[
            'id'=>'101',
            'token'=>'301'
        ];
        $this->call('GET','cancel', $insertCancelLeave);
        $this->assertResponseOk();
    }
}