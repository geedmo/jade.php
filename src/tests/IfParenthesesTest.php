<?php

namespace Jade\Tests;

/**
 * Class Each Else test
 * @package Jade\Tests
 */
class IfParenthesesTest extends TestBase {
    public function testIf_Parentheses() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 