<?php
namespace Jade\Tests;

/**
 * Class If test
 * @package Jade\Tests
 */
class IfTest extends TestBase {
    public function testIf_Parentheses() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            